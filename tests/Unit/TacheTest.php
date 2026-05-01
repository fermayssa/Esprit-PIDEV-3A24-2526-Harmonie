<?php

namespace App\Tests\Unit;

use App\Entity\Tache;
use PHPUnit\Framework\TestCase;

class TacheTest extends TestCase
{
    public function testCreationAvecValeursParDefaut(): void
    {
        $tache = new Tache();
        $this->assertSame('A_FAIRE', $tache->getStatutTache());
        $this->assertSame('', $tache->getNom());
        $this->assertNull($tache->getDeadline());
        $this->assertNull($tache->getPriorite());
    }

    public function testSetNom(): void
    {
        $tache = new Tache();
        $tache->setNom('Intégration calendrier');
        $this->assertSame('Intégration calendrier', $tache->getNom());
    }

    public function testChangementStatut(): void
    {
        $tache = new Tache();
        $tache->setStatutTache('EN_COURS');
        $this->assertSame('EN_COURS', $tache->getStatutTache());

        $tache->setStatutTache('TERMINEE');
        $this->assertSame('TERMINEE', $tache->getStatutTache());
    }

    public function testDeadline(): void
    {
        $tache = new Tache();
        $date = new \DateTime('2026-05-01');
        $tache->setDeadline($date);
        $this->assertSame($date, $tache->getDeadline());
    }

    public function testNotes(): void
    {
        $tache = new Tache();
        $tache->setNotes('Vérifier la sync Google Calendar');
        $this->assertSame('Vérifier la sync Google Calendar', $tache->getNotes());
    }

    public function testGithubFields(): void
    {
        $tache = new Tache();
        $tache->setGithubIssueNumber(42);
        $tache->setGithubRepo('harmonie/app');
        $this->assertSame(42, $tache->getGithubIssueNumber());
        $this->assertSame('harmonie/app', $tache->getGithubRepo());
    }
}
