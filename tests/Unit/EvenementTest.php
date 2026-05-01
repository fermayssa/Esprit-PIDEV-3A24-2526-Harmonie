<?php

namespace App\Tests\Unit;

use App\Entity\Evenement;
use PHPUnit\Framework\TestCase;

class EvenementTest extends TestCase
{
    public function testCreationAvecValeursParDefaut(): void
    {
        $evenement = new Evenement();
        $this->assertFalse($evenement->isApprouve());
        $this->assertSame('en_ligne', $evenement->getLieuType());
        $this->assertSame(15, $evenement->getReminderMinutes());
        $this->assertFalse($evenement->isReminderSent());
        $this->assertCount(0, $evenement->getDemandeReservations());
    }

    public function testSetTitre(): void
    {
        $evenement = new Evenement();
        $evenement->setTitre('Réunion Esprit');
        $this->assertSame('Réunion Esprit', $evenement->getTitre());
    }

    public function testDatesDebutEtFin(): void
    {
        $evenement = new Evenement();
        $debut = new \DateTime('2026-05-01 10:00');
        $fin = new \DateTime('2026-05-01 12:00');
        $evenement->setDateDebut($debut);
        $evenement->setDateFin($fin);

        $this->assertSame($debut, $evenement->getDateDebut());
        $this->assertSame($fin, $evenement->getDateFin());
        $this->assertGreaterThan(
            $evenement->getDateDebut(),
            $evenement->getDateFin()
        );
    }

    public function testApprobation(): void
    {
        $evenement = new Evenement();
        $this->assertFalse($evenement->isApprouve());
        $evenement->setApprouve(true);
        $this->assertTrue($evenement->isApprouve());
    }

    public function testLieuTypePresentiel(): void
    {
        $evenement = new Evenement();
        $evenement->setLieuType('presentiel');
        $evenement->setLieuAdresse('Esprit, Ariana');
        $this->assertSame('presentiel', $evenement->getLieuType());
        $this->assertSame('Esprit, Ariana', $evenement->getLieuAdresse());
    }

    public function testStatutDemandeSalle(): void
    {
        $evenement = new Evenement();
        $evenement->setStatutDemandeSalle('EN_ATTENTE');
        $this->assertSame('EN_ATTENTE', $evenement->getStatutDemandeSalle());
    }

    public function testReminderMinutes(): void
    {
        $evenement = new Evenement();
        $evenement->setReminderMinutes(30);
        $this->assertSame(30, $evenement->getReminderMinutes());
    }
}
