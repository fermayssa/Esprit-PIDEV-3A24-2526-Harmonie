<?php

namespace App\Tests\Unit;

use App\Entity\DemandeReservation;
use PHPUnit\Framework\TestCase;

class DemandeReservationTest extends TestCase
{
    public function testStatutParDefautEnAttente(): void
    {
        $demande = new DemandeReservation();
        $this->assertSame(DemandeReservation::STATUT_EN_ATTENTE, $demande->getStatut());
    }

    public function testDateDemandeInitialiseeAutomatiquement(): void
    {
        $demande = new DemandeReservation();
        $this->assertInstanceOf(\DateTimeImmutable::class, $demande->getDateDemande());
    }

    public function testChangementStatutVersAcceptee(): void
    {
        $demande = new DemandeReservation();
        $demande->setStatut(DemandeReservation::STATUT_ACCEPTEE);
        $this->assertSame('ACCEPTEE', $demande->getStatut());
    }

    public function testChangementStatutVersRefusee(): void
    {
        $demande = new DemandeReservation();
        $demande->setStatut(DemandeReservation::STATUT_REFUSEE);
        $this->assertSame('REFUSEE', $demande->getStatut());
    }

    public function testConstantesStatut(): void
    {
        $this->assertSame('EN_ATTENTE', DemandeReservation::STATUT_EN_ATTENTE);
        $this->assertSame('ACCEPTEE', DemandeReservation::STATUT_ACCEPTEE);
        $this->assertSame('REFUSEE', DemandeReservation::STATUT_REFUSEE);
    }

    public function testCommentaireAdmin(): void
    {
        $demande = new DemandeReservation();
        $demande->setCommentaireAdmin('Salle disponible, réservation confirmée.');
        $this->assertSame(
            'Salle disponible, réservation confirmée.',
            $demande->getCommentaireAdmin()
        );
    }
}
