<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pharaonic\Laravel\Menus\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::set('manager_head', 'Tableau de Bord', '/');

        Menu::set('manager_head', 'Socials & Blog', '/social');
        Menu::set('manager_side', 'Articles', '/social/articles', 2);
        Menu::set('manager_side', 'Pages', '/social/pages', 2);
        Menu::set('manager_side', 'Cercles', '/social/cercles', 2);
        Menu::set('manager_side', 'Services', '/social/services', 2);
        Menu::set('manager_side', 'Evènements', '/social/events', 2);
        Menu::set('manager_side', 'Postes Sociales', '/social/posts', 2);

        Menu::set('manager_head', 'Wiki', '/wiki');
        Menu::set('manager_side', 'Catégories', '/wiki/categories', 9);
        Menu::set('manager_side', 'Articles', '/wiki/articles', 9);

        Menu::set('manager_head', 'Railway Manager', '/railway');
        Menu::set('manager_side', 'Matériels Roulants', '/railway/engines', 12);
        Menu::set('manager_side', 'Gares & Hubs', '/railway/gares', 12);
        Menu::set('manager_side', 'Lignes', '/railway/lignes', 12);
        Menu::set('manager_side', 'Badges & Récompenses', '/railway/badges', 12);
        Menu::set('manager_side', 'Services de locations', '/railway/rents', 12);
        Menu::set('manager_side', 'Services bancaires', '/railway/finances', 12);
        Menu::set('manager_side', 'Recherches & Developments', '/railway/researches', 12);
        Menu::set('manager_side', 'Bonus Journalier', '/railway/bonuses', 12);
        Menu::set('manager_side', 'Porte carte', '/railway/cards', 12);
        Menu::set('manager_side', 'Configurations', '/railway/configs', 12);

        Menu::set('manager_head', 'Administration', '/admin');
        Menu::set('manager_side', 'Gestion des utilisateurs', '/admin/users', 23);
        Menu::set('manager_side', 'Laravel Pulse', '/pulse', 23);
        Menu::set('manager_side', 'Log Système', route('log-viewer::dashboard'), 23);
        Menu::set('manager_side', 'Horizon', '/horizon', 23);

        Menu::set('manager_head', 'Support Technique', '/support');
        Menu::set('manager_side', 'Tickets', '/support/tickets', 28);
        Menu::set('manager_side', 'Rapport de bugs', '/support/bugs', 28);
        Menu::set('manager_side', 'Suggestions', '/support/suggests', 28);
        Menu::set('manager_side', 'Rapport de plaintes', '/support/claims', 28);
    }
}
