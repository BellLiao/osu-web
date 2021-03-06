<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'availability' => [
        'disabled' => 'Ez a beatmap jelenleg nem letölthető.',
        'parts-removed' => 'Ez a beatmap eltávolításra került a készítő kérésére vagy egy harmadik fél a jogok tulajdonosa.',
        'more-info' => 'Itt találsz több információt.',
    ],

    'index' => [
        'title' => 'Beatmap lista',
        'guest_title' => 'Beatmap-ek',
    ],

    'show' => [
        'discussion' => 'Beszélgetés',

        'details' => [
            'mapped_by' => 'mappolva :mapper által',
            'submitted' => 'beküldve ',
            'updated' => 'utoljára frissítve ',
            'updated_timeago' => 'utóljára frissítve: :timeago',
            'ranked' => 'rank-elve ',
            'approved' => 'elfogadva ',
            'qualified' => 'qualified ',
            'loved' => 'loved ',
            'logged-out' => 'Be kell jelentkezned mielőtt beatmap-et tölthetnél le!',
            'download' => [
                '_' => 'Letöltés',
                'video' => 'Videóval',
                'no-video' => 'Videó nélkül',
                'direct' => 'osu!direct',
            ],
            'favourite' => 'A beatmap szett kedvencek közé tétele',
            'unfavourite' => 'Beatmap eltávolitása a kedvencek közül',
            'favourited_count' => '+ 1 másik!|+ :count másik!',
        ],
        'stats' => [
            'cs' => 'Kör méret',
            'cs-mania' => 'Gomb mennyiség',
            'drain' => 'HP kimeritő',
            'accuracy' => 'Pontosság',
            'ar' => 'Megközelítés arány',
            'stars' => 'Csillagos nehézség',
            'total_length' => 'Hossz',
            'bpm' => 'BPM',
            'count_circles' => 'Körök Száma',
            'count_sliders' => 'Csúszka számláló',
            'user-rating' => 'Felhasználói Értékelés',
            'rating-spread' => 'Értékelési terjedelem',
            'nominations' => 'Jelölések',
            'playcount' => 'Játszottságszám',
        ],
        'info' => [
            'description' => 'Leírás',
            'genre' => 'Műfaj',
            'language' => 'Nyelv',
            'no_scores' => 'Az adat még mindig számolás alatt áll...',
            'points-of-failure' => 'Hibapontok',
            'source' => 'Forrás',
            'success-rate' => 'Teljesítési arány',
            'tags' => 'Cimkék',
            'unranked' => 'Rangsorolatlan beatmap',
        ],
        'scoreboard' => [
            'achieved' => 'elérve: :when',
            'country' => 'Országos Ranglista',
            'friend' => 'Baráti Ranglista',
            'global' => 'Globális Ranglista',
            'supporter-link' => 'Kattints <a href=":link">ide</a>,hogy megtekinthesd azt a sok jó funkcíót amit kaphatsz!',
            'supporter-only' => 'Támogató kell legyél, hogy elérd a baráti és az országos ranglistát!',
            'title' => 'Eredményjelző',

            'headers' => [
                'accuracy' => 'Pontosság',
                'combo' => 'Legmagasabb kombó',
                'miss' => 'Miss',
                'mods' => 'Modok',
                'player' => 'Játékos',
                'pp' => '',
                'rank' => 'Rang',
                'score_total' => 'Összpontszám',
                'score' => 'Pontszám',
            ],

            'no_scores' => [
                'country' => 'Senki sem ért még el eredményt az országodból ezen a map-en!',
                'friend' => 'Senki sem ért még el eredményt a barátaid közül ezen a map-en!',
                'global' => 'Egyetlen eredmény sincs. Esetleg megpróbálhatnál szerezni párat?',
                'loading' => 'Eredmények betöltése...',
                'unranked' => 'Rangsorolatlan beatmap.',
            ],
            'score' => [
                'first' => 'Az élen',
                'own' => 'A te legjobbad',
            ],
        ],
    ],
];
