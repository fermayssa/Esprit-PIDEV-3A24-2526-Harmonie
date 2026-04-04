<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use App\Entity\Calendrier;
use App\Entity\Categorie;
use App\Entity\Courses;
use App\Entity\Etudiant;
use App\Entity\Exercice;
use App\Entity\Post;
use App\Entity\Salle;
use App\Entity\Subject;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        if (null !== $manager->getRepository(User::class)->findOneBy(['userEmail' => 'alice.dupont@example.com'])) {
            return;
        }

        $cal = new Calendrier();
        $cal->setVueCalendrier('MOIS');
        $manager->persist($cal);

        $salle = new Salle();
        $salle->setNom('Salle polyvalente A');
        $salle->setCapacite(30);
        $salle->setEquipements('Vidéoprojecteur, tableau');
        $salle->setDisponible(true);
        $salle->setDescription('Salle de cours principale');
        $manager->persist($salle);

        $subject = new Subject();
        $subject->setName('Mathématiques');
        $manager->persist($subject);

        $user = new User();
        $user->setUserNom('Dupont');
        $user->setUserPrenom('Alice');
        $user->setUserEmail('alice.dupont@example.com');
        $user->setUserPassword(password_hash('password123', PASSWORD_DEFAULT));
        $user->setUserDateDeNaissance('2000-05-15');
        $user->setUserSexe('FEMME');
        $user->setDateInscription('2026-04-01');
        $user->setTypeUtilisateur('ETUDIANT');
        $user->setIsActive(true);
        $manager->persist($user);

        $etudiant = new Etudiant();
        $etudiant->setNom('Martin');
        $etudiant->setPrenom('Bob');
        $etudiant->setEmail('bob.martin@example.com');
        $manager->persist($etudiant);

        $cat = new Categorie();
        $cat->setNomCategorie('Nutrition');
        $cat->setDescription('Conseils alimentation');
        $manager->persist($cat);

        $exo = new Exercice();
        $exo->setNomExercice('Marche rapide');
        $exo->setTypeExercice('Cardio');
        $manager->persist($exo);

        $aliment = new Aliment();
        $aliment->setNomAliment('Pomme (fixture)');
        $aliment->setCaloriesPour100g(52);
        $aliment->setProteines(0.3);
        $aliment->setGlucides(14);
        $aliment->setLipides(0.2);
        $manager->persist($aliment);

        $manager->flush();

        $course = new Courses();
        $course->setTitle('Introduction Symfony');
        $course->setSubject($subject);
        $course->setUser($user);
        $course->setIsPublished(true);
        $course->setSaves(0);
        $manager->persist($course);

        $post = new Post();
        $post->setTitre('Bienvenue sur Harmony');
        $post->setContenu('Ce post est créé par les fixtures Doctrine.');
        $post->setUser($user);
        $post->setCategorie($cat);
        $manager->persist($post);

        $manager->flush();
    }
}
