<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>v2</title>
</head>
<body>

            <!-- Header -->

    <header>
        <section class="container-header">
            <div class="top-content">
                <a href="team.blade.php">Notre équipe</a>
            </div>
            <div class="title">
                <hr>
                <h1 data-aos="fade-right">Pourquoi les trains français</h1>
                <h1 data-aos="fade-left">sont toujours en retards?</h1>
                <hr>
            </div>
            <div class="bot-content">
                <p>"Deux trains, <br> deux ambiances"</p>
                <p>Groupe 3</p>
            </div>
            <div class="scroll-top">
                <p>swipe</p>
                <a href="#map" data-aos="flip-left"></a>
                <p>up</p>
            </div>
        </section>
    </header>

    <main>

        <!-- Partie introduction -->

        <section class="intro-content">
            <div class="intro">
                <h1>Introduction</h1>
                <div class="text-intro" data-aos="zoom-in">
                    <p>Savez vous que le retard cumulé des trains de la SNCF équivaut à 100 ans, nous allons vous montrez pourquoi.</p>
                </div>
                <div class="slide-citation">
                    <ul class="slider">
                        <li>
                            <p><span>Étape 1:</span> Séléctionnez la carte que vous voulez comparer avec le TGV</p>
                        </li>
                        <li>
                            <p><span>Étape 2:</span> Scrollez pour voir les différentes comparaisons</p>
                        </li>
                        <li>
                            <p><span>Étape 3:</span> Vous pouvez changer de pays de comparaison en en séléctionnant un autre</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Partie selection du pays -->

        <section class="map" id='map'>
            <div class="map-selection">
                <h1>Map selection</h1>
                <div class="map-belgique" data-aos="fade-right">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                     width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                     preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path id="belgique" class="country" d="M2700 4289 c-163 -21 -363 -120 -558 -277 -45 -36 -77 -54 -114 -61
                    -205 -45 -650 -40 -792 7 -37 13 -56 26 -73 52 -63 100 -109 128 -187 110 -54
                    -12 -97 -31 -366 -160 -124 -59 -280 -129 -347 -154 -175 -67 -246 -136 -260
                    -255 -20 -168 151 -491 301 -568 68 -35 164 -37 251 -3 217 82 291 59 330
                    -105 25 -107 66 -185 126 -239 64 -58 137 -84 261 -96 140 -14 161 -32 198
                    -177 6 -22 19 -52 29 -65 19 -23 21 -23 228 -23 196 0 211 -1 258 -23 66 -30
                    118 -83 146 -146 20 -45 23 -73 28 -236 8 -249 15 -259 192 -281 249 -30 478
                    54 609 224 22 29 47 61 55 72 14 18 15 10 10 -95 -11 -204 26 -365 98 -426 16
                    -14 121 -69 232 -123 212 -103 382 -208 500 -310 116 -101 189 -123 315 -97
                    79 17 196 66 249 104 42 31 65 83 56 131 -3 20 -36 98 -72 174 -65 136 -66
                    139 -65 220 0 101 27 190 80 273 70 107 159 174 293 219 263 90 458 345 397
                    521 -28 79 -168 274 -273 380 -179 180 -319 245 -597 279 -27 4 -48 8 -48 11
                    0 2 31 64 69 137 147 279 181 388 136 437 -10 11 -23 20 -29 20 -29 1 -137 55
                    -233 117 -166 107 -183 112 -373 98 -97 -7 -110 -6 -155 14 -65 29 -99 62
                    -121 119 -41 110 -106 173 -198 192 -30 6 -123 10 -212 8 -87 -2 -193 0 -234
                    4 -41 3 -104 2 -140 -3z"/>
                    </g>
                    </svg>
                    <h1>Belgique</h1>
                </div>
                <div class="map-japon" data-aos="zoom-in-right">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">
                    
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path id="japon" class="country" d="M3574 5109 c-77 -22 -114 -103 -114 -248 1 -47 7 -115 15 -151 21
                    -98 19 -235 -5 -314 -17 -53 -32 -77 -76 -122 -95 -97 -144 -208 -146 -326 -1
                    -119 66 -208 168 -224 109 -16 224 61 224 151 0 40 26 82 56 89 20 5 47 -3
                    108 -32 144 -70 239 -88 311 -57 59 24 143 113 201 212 86 146 183 238 332
                    319 83 44 122 112 97 171 -28 67 -225 178 -501 281 -197 75 -321 128 -411 177
                    -141 78 -157 85 -192 84 -20 0 -50 -5 -67 -10z M3450 3515 c-85 -63 -139 -148 -165 -257 -8 -35 -35 -172 -60 -304
                    -62 -334 -125 -514 -229 -651 -64 -84 -232 -242 -293 -276 -28 -15 -72 -30
                    -98 -33 -46 -7 -47 -6 -94 45 -26 28 -55 51 -64 51 -23 0 -62 -62 -146 -227
                    -104 -206 -143 -260 -205 -289 -57 -26 -154 -44 -235 -44 -197 0 -577 -98
                    -782 -200 -66 -33 -321 -181 -341 -198 -45 -38 -8 -84 121 -150 86 -44 104
                    -50 142 -45 63 7 234 65 365 124 230 101 417 157 496 146 71 -10 127 -80 153
                    -192 9 -38 23 -81 31 -96 19 -37 68 -63 106 -55 50 10 139 75 255 188 97 94
                    126 115 206 153 50 25 133 56 182 70 133 38 296 122 378 195 123 109 198 130
                    238 68 18 -29 20 -44 15 -126 -4 -76 -2 -94 10 -99 24 -9 94 28 145 78 52 51
                    80 100 116 204 44 129 53 225 53 556 0 314 9 460 36 584 9 39 18 129 21 200
                    10 272 -58 498 -178 585 -60 43 -118 42 -179 -5z M1556 999 c-21 -5 -94 -40 -162 -77 l-123 -67 -39 -75 c-49 -91 -58
                    -134 -42 -199 27 -112 73 -96 222 80 28 33 68 67 101 84 l54 29 67 -22 c124
                    -41 153 -28 142 66 -8 67 -41 139 -76 164 -32 22 -94 30 -144 17z M511 910 c-80 -29 -123 -70 -139 -133 -13 -48 -9 -66 36 -156 31 -62
                    38 -87 40 -151 3 -65 0 -85 -23 -140 -39 -92 -43 -163 -13 -220 27 -52 87 -98
                    141 -107 34 -5 42 -2 73 28 69 66 160 222 224 383 34 86 70 221 70 263 0 68
                    -94 202 -164 234 -56 25 -173 25 -245 -1z"/>
                    </g>
                    </svg>   
                    <h1>Japon</h1>            
                </div>
                <div class="map-allemagne" data-aos="zoom-in-left">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">
                    
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path id="allemagne" class="country" d="M1879 5116 c-3 -3 -73 -6 -154 -7 -148 0 -148 0 -119 -18 83 -52 99
                    -108 64 -223 -33 -107 -31 -141 14 -214 64 -106 58 -166 -21 -199 -51 -21 -69
                    -39 -119 -117 -74 -114 -118 -121 -289 -47 -76 33 -116 44 -167 47 -85 5 -109
                    -1 -152 -38 -62 -55 -77 -110 -88 -324 -5 -105 -14 -207 -19 -226 -15 -62 -63
                    -124 -125 -164 -32 -22 -64 -45 -71 -54 -12 -15 -9 -50 8 -108 32 -104 27
                    -211 -11 -263 -33 -44 -102 -76 -234 -109 -72 -18 -126 -37 -137 -49 -20 -19
                    -20 -20 10 -76 52 -98 51 -153 -5 -407 -45 -199 -27 -294 74 -402 51 -55 51
                    -53 31 -233 -19 -178 11 -349 81 -450 64 -92 184 -176 315 -218 28 -9 122 -33
                    210 -52 232 -52 355 -87 355 -100 0 -7 -10 -20 -21 -31 -55 -49 -145 -208
                    -185 -328 -37 -106 -74 -298 -74 -377 0 -169 75 -208 281 -148 110 33 120 34
                    289 34 160 0 192 -3 374 -38 109 -21 215 -45 235 -53 20 -8 69 -40 109 -71
                    l73 -56 35 37 c80 82 171 100 364 71 222 -32 291 -23 403 54 78 53 158 74 267
                    69 82 -4 109 -10 197 -46 141 -57 167 -61 187 -29 20 29 11 80 -29 180 -70
                    171 -40 235 162 341 205 107 273 162 273 220 0 66 -142 202 -383 366 -60 41
                    -130 96 -157 122 -145 142 -250 369 -221 474 6 21 17 46 24 54 60 74 402 272
                    603 350 159 61 275 86 459 99 148 10 201 27 244 77 54 61 54 147 1 221 -83
                    116 -115 235 -136 512 -16 218 -26 286 -49 330 -8 16 -51 65 -94 108 -103 101
                    -106 113 -53 217 69 136 83 213 58 319 -26 112 -42 137 -270 432 -103 133
                    -142 210 -157 310 -10 65 -16 78 -39 95 -48 34 -91 26 -152 -26 -102 -87 -206
                    -137 -452 -215 -144 -46 -234 -86 -399 -179 -74 -41 -152 -50 -228 -25 -30 10
                    -58 21 -63 26 -8 7 31 91 112 238 l35 64 -64 -36 c-85 -47 -158 -67 -244 -67
                    -128 0 -185 33 -265 152 -99 148 -191 197 -380 205 -63 3 -118 2 -121 -1z"/>
                    </g>
                    </svg>
                    <h1>Allemagne</h1>
                </div>
                <div class="map-russie" data-aos="fade-left">

                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">
                    
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path id="russie" class="country" d="M4494 3430 c-214 -56 -405 -210 -540 -435 -124 -208 -268 -341 -490
                    -455 -141 -72 -407 -161 -425 -142 -4 4 -24 70 -44 147 -21 77 -39 141 -40
                    143 -2 2 -36 -6 -77 -18 -238 -69 -386 -127 -564 -221 -121 -64 -127 -65 -179
                    -18 -94 86 -324 272 -350 283 -34 15 -305 66 -346 66 -14 0 -34 -9 -46 -19
                    -11 -11 -62 -99 -114 -196 l-93 -177 -296 -146 c-284 -141 -298 -149 -365
                    -217 -122 -122 -185 -279 -187 -465 -1 -52 2 -113 6 -135 l6 -40 -175 -115
                    c-96 -63 -174 -118 -172 -121 1 -3 94 -173 207 -377 l205 -372 101 0 101 0
                    105 118 c153 172 265 249 438 304 66 20 95 23 235 23 138 0 170 -3 231 -23
                    116 -36 203 -86 340 -193 213 -166 366 -229 559 -229 105 0 168 14 360 77 154
                    51 156 51 480 44 153 -3 216 8 313 55 70 34 160 119 215 202 72 108 133 152
                    209 152 45 0 126 -40 167 -83 l33 -35 141 69 c78 38 145 65 149 61 14 -15 57
                    -203 63 -279 3 -43 8 -93 11 -111 l5 -32 150 0 150 0 -6 73 c-23 263 -45 344
                    -213 769 l-137 347 -102 1 c-77 0 -103 3 -103 13 0 7 24 60 54 117 60 117 68
                    140 96 299 11 61 29 135 40 164 20 53 85 141 99 133 3 -2 36 -77 71 -166 36
                    -89 70 -164 75 -166 19 -8 270 103 267 117 -2 8 -112 282 -244 609 -132 327
                    -242 601 -245 608 -7 17 -45 14 -129 -8z"/>
                    </g>
                    </svg>
                    <h1>Russie</h1>
                </div>
            </div>
        </section>

        <!-- Div a afficher / masquer en fonction du pays séléctionné -->

        <div class="cache-selection-allemagne">  <!-- Div à masquer / afficher -->

        <!-- Partie comparaison entre les deux compagnies -->

            <section class="compare">

                <!-- Partie France -->

                <div class="data-fr">
                    <h1>France</h1>
                <div class="liste-data-fr">
                    <ul>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/logosncf.png') }}"  alt="">
                            </div>
                            <p><?= $compagnyFrance?></p>
                        </li>
                        <li>
                            <div class="carre-fr" data-aos="fade-right">
                                <img src=" {{ asset('img/voie.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $sizeRailwayFrance ?>km</p>
                                <p>de voies</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/gare.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationFrance ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/personnes.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationFrance?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/habitants.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Partie autre pays -->

            <div class="data-compare-autre">
            
                <h1>Allemagne</h1>
                <div class="liste-data-autre">
                    <ul>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/logojapon.png') }}" alt="">
                            </div>
                            <p><?= $compagnyAllemagne?></p>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/voieblanc.png') }}" alt="">
                            </div>
                                <div class="detail-data-fr">
                                    <p><?= $sizeRailwayAllemagne ?>km</p>
                                    <p>de voies</p>
                                </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/gareblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationAllemagne?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/personnesblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationAllemagne?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/habitantsblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>

        <!-- Partie graphiques -->

        <section class="donnees" id="sect-all">
            <h1>TGV vs Train Allemand</h1>

            <!-- Partie comparaison vitesse -->

            <div class="affichage-all-1">
                <div class="link">
                    <ul>
                        <li>
                            <a id="vitesse1">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif1 not-active">Effectif</a>
                        </li>
                        <li  class="not-active">
                            <a class="panne1 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence1 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Données comparaison vitesse  -->

                <div class="ligne1">
                    <img class="img-ligne1" src=" {{ asset('img/trainall.png') }}" alt="">
                </div>
                <div class="ligne2">
                    <img class="img-ligne2" src=" {{ asset('img/tgv.png') }}" alt="">
                </div>

                <div class="data-train">
                    <div class="data-tgv">
                        <h2>TGV</h2>
                        <ul>
                            <li>
                                <span><?= $speedAverageFrance ?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>

                    <div class="data-autre">
                        <h2>Train Allemand</h2>
                        <ul>
                            <li>
                               <span><?= $speedAverageAllemagne?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison effectif -->

            <div class="affichage-all-2 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse1 not-active">Vitesse</a>
                        </li>
                        <li>
                            <a class="effectif1">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne1 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence1 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison effectif -->

                <div class="graph1">
                    <canvas id="graph-all-1"></canvas>
                </div>
            </div>

                <!-- Partie comparaison panne -->

            <div class="affichage-all-3 cache">
                <div class="link">
                    <ul>
                        <li  class="not-active">
                            <a class="vitesse1 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif1 not-active">Effectif</a>
                        </li>
                        <li>
                            <a class="panne1">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence1 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison panne -->

                <div class="container-graph">
                    <div class="graph2">
                        <canvas id="graph-all-2"></canvas>
                    </div>
                    <div class="graph2">
                        <canvas id="graph-all-3"></canvas>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison affluence -->

            <div class="affichage-all-4 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse1 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif1 not-active">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne1 not-active">Panne</a>
                        </li>
                        <li>
                            <a class="affluence1">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison affluence -->

                <div class="graph1">
                    <canvas id="graph-all-4"></canvas>
                </div>             
            </div>

        </section>

        </div>

        <div class="cache-selection-japon">  <!-- Div à masquer / afficher -->

        <!-- Partie comparaison entre les deux compagnies -->

            <section class="compare">

                <!-- Partie France -->

                <div class="data-fr">
                    <h1>France</h1>
                <div class="liste-data-fr">
                    <ul>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/logosncf.png') }}" alt="">
                            </div>
                            <p><?= $compagnyFrance?></p>
                        </li>
                        <li>
                            <div class="carre-fr" data-aos="fade-right">
                                <img src=" {{ asset('img/voie.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $sizeRailwayFrance ?>km</p>
                                <p>de voies</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/gare.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationFrance ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/personnes.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationFrance?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/habitants.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Partie autre pays -->

            <div class="data-compare-autre">
            
                <h1>Japon</h1>
                <div class="liste-data-autre">
                    <ul>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/logojapon.png') }}" alt="">
                            </div>
                            <p><?= $compagnyJapan?></p>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/voieblanc.png') }}" alt="">
                            </div>
                                <div class="detail-data-fr">
                                    <p><?= $sizeRailwayJapan ?>km</p>
                                    <p>de voies</p>
                                </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/gareblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationJapan ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/personnesblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationJapan?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/habitantsblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>

        <!-- Partie graphiques -->

        <section class="donnees" id="sect-jpn">
            <h1>TGV vs Shinkansen</h1>

            <!-- Partie comparaison vitesse -->

            <div class="affichage-jpn-1">
                <div class="link">
                    <ul>
                        <li>
                            <a class="vitesse2">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif2 not-active">Effectif</a>
                        </li>
                        <li  class="not-active">
                            <a class="panne2 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence2 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Données comparaison vitesse  -->

                <div class="ligne1">
                    <img class="img-ligne3" src=" {{ asset('img/shin.png') }}" alt="">
                </div>
                <div class="ligne2">
                    <img class="img-ligne4" src=" {{ asset('img/tgv.png') }}" alt="">
                </div>

                <div class="data-train">
                    <div class="data-tgv">
                        <h2>TGV</h2>
                        <ul>
                            <li>
                                <span><?=$speedAverageFrance?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>

                    <div class="data-autre">
                        <h2><?= $compagnyJapan?></h2>
                        <ul>
                            <li>
                               <span><?= $speedAverageJapan?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison effectif -->

            <div class="affichage-jpn-2 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse2 not-active">Vitesse</a>
                        </li>
                        <li>
                            <a class="effectif2">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne2 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence2 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison effectif -->

                <div class="graph1">
                    <canvas id="graph-jpn-1"></canvas>
                </div>
            </div>

                <!-- Partie comparaison panne -->

            <div class="affichage-jpn-3 cache">
                <div class="link">
                    <ul>
                        <li  class="not-active">
                            <a class="vitesse2 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif2 not-active">Effectif</a>
                        </li>
                        <li>
                            <a class="panne2">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence2 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison panne -->

                <div class="container-graph">
                    <div class="graph2">
                        <canvas id="graph-jpn-2"></canvas>
                    </div>
                    <div class="graph2">
                        <canvas id="graph-jpn-3"></canvas>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison affluence -->

            <div class="affichage-jpn-4 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse2 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif2 not-active">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne2 not-active">Panne</a>
                        </li>
                        <li>
                            <a class="affluence2">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison affluence -->

                <div class="graph1">
                    <canvas id="graph-jpn-4"></canvas>
                </div>             
            </div>

        </section>

        </div>

        <div class="cache-selection-belgique">  <!-- Div à masquer / afficher -->

        <!-- Partie comparaison entre les deux compagnies -->

            <section class="compare">

                <!-- Partie France -->

                <div class="data-fr">
                    <h1>France</h1>
                <div class="liste-data-fr">
                    <ul>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/logosncf.png') }}" alt="">
                            </div>
                            <p><?= $compagnyFrance?></p>
                        </li>
                        <li>
                            <div class="carre-fr" data-aos="fade-right">
                                <img src=" {{ asset('img/voie.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $sizeRailwayFrance ?>km</p>
                                <p>de voies</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/gare.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationFrance ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/personnes.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationFrance?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/habitants.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Partie autre pays -->

            <div class="data-compare-autre">
            
                <h1>Belgique</h1>
                <div class="liste-data-autre">
                    <ul>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/logojapon.png') }}" alt="">
                            </div>
                            <p><?=$compagnyBelgique?></p>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/voieblanc.png') }}" alt="">
                            </div>
                                <div class="detail-data-fr">
                                    <p><?= $sizeRailwayBelgique ?>km</p>
                                    <p>de voies</p>
                                </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/gareblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationBelgique ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/personnesblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationBelgique?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/habitantsblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>

        <!-- Partie graphiques -->

        <section class="donnees" id="sect-bel">
            <h1>TGV vs Train Belge</h1>

            <!-- Partie comparaison vitesse -->

            <div class="affichage-bel-1">
                <div class="link">
                    <ul>
                        <li>
                            <a class="vitesse3">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif3 not-active">Effectif</a>
                        </li>
                        <li  class="not-active">
                            <a class="panne3 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence3 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Données comparaison vitesse  -->

                <div class="ligne1">
                    <img class="img-ligne5" src=" {{ asset('img/lgv.png') }}" alt="">
                </div>
                <div class="ligne2">
                    <img class="img-ligne6" src=" {{ asset('img/tgv.png') }}" alt="">
                </div>

                <div class="data-train">
                    <div class="data-tgv">
                        <h2>TGV</h2>
                        <ul>
                            <li>
                                <span><?=$speedAverageFrance?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>

                    <div class="data-autre">
                        <h2>Train Belge</h2>
                        <ul>
                            <li>
                               <span><?= $speedAverageBelgique?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison effectif -->

            <div class="affichage-bel-2 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse3 not-active">Vitesse</a>
                        </li>
                        <li>
                            <a class="effectif3">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne3 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence3 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison effectif -->

                <div class="graph1">
                    <canvas id="graph-bel-1"></canvas>
                </div>
            </div>

                <!-- Partie comparaison panne -->

            <div class="affichage-bel-3 cache">
                <div class="link">
                    <ul>
                        <li  class="not-active">
                            <a class="vitesse3 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif3 not-active">Effectif</a>
                        </li>
                        <li>
                            <a class="panne3">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence3 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison panne -->

                <div class="container-graph">
                    <div class="graph2">
                        <canvas id="graph-bel-2"></canvas>
                    </div>
                    <div class="graph2">
                        <canvas id="graph-bel-3"></canvas>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison affluence -->

            <div class="affichage-bel-4 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse3 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif3 not-active">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne3 not-active">Panne</a>
                        </li>
                        <li>
                            <a class="affluence3">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison affluence -->

                <div class="graph1">
                    <canvas id="graph-bel-4"></canvas>
                </div>             
            </div>

        </section>

        </div>

        <div class="cache-selection-russie">  <!-- Div à masquer / afficher -->

        <!-- Partie comparaison entre les deux compagnies -->

            <section class="compare">

                <!-- Partie France -->

                <div class="data-fr">
                    <h1>France</h1>
                <div class="liste-data-fr">
                    <ul>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/logosncf.png') }}" alt="">
                            </div>
                            <p><?= $compagnyFrance?></p>
                        </li>
                        <li>
                            <div class="carre-fr" data-aos="fade-right">
                                <img src=" {{ asset('img/voie.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $sizeRailwayFrance ?>km</p>
                                <p>de voies</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/gare.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationFrance ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/personnes.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationFrance?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-fr">
                                <img src=" {{ asset('img/logosncf.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Partie autre pays -->

            <div class="data-compare-autre">
            
                <h1>Russie</h1>
                <div class="liste-data-autre">
                    <ul>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/logojapon.png') }}" alt="">
                            </div>
                            <p><?= $compagnyRussie?></p>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/voieblanc.png') }}" alt="">
                            </div>
                                <div class="detail-data-fr">
                                    <p><?= $sizeRailwayRussie ?>km</p>
                                    <p>de voies</p>
                                </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/gareblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $numberStationRussie ?></p>
                                <p>de gares</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/personnesblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p><?= $frequentationRussie?></p>
                                <p>passagers / jour</p>
                            </div>
                        </li>
                        <li>
                            <div class="carre-autre">
                                <img src=" {{ asset('img/habitantsblanc.png') }}" alt="">
                            </div>
                            <div class="detail-data-fr">
                                <p>XX</p>
                                <p>nombre d'habitants</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>

        <!-- Partie graphiques -->

        <section class="donnees" id="sect-rus">
            <h1>TGV vs Train Transsiberien</h1>

            <!-- Partie comparaison vitesse -->

            <div class="affichage-rus-1">
                <div class="link">
                    <ul>
                        <li>
                            <a class="vitesse4">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif4 not-active">Effectif</a>
                        </li>
                        <li  class="not-active">
                            <a class="panne4 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence4 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Données comparaison vitesse  -->

                <div class="ligne1">
                    <img class="img-ligne7" src=" {{ asset('img/trainrus.png') }}" alt="">
                </div>
                <div class="ligne2">
                    <img class="img-ligne8" src=" {{ asset('img/tgv.png') }}" alt="">
                </div>

                <div class="data-train">
                    <div class="data-tgv">
                        <h2>TGV</h2>
                        <ul>
                            <li>
                                <span><?=$speedAverageFrance?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>

                    <div class="data-autre">
                        <h2>Train Transsiberien</h2>
                        <ul>
                            <li>
                               <span><?= $speedAverageRussie?>km/h</span>
                                <p>Vitesse moyenne</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison effectif -->

            <div class="affichage-rus-2 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse4 not-active">Vitesse</a>
                        </li>
                        <li>
                            <a class="effectif4">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne4 not-active">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence4 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison effectif -->

                <div class="graph1">
                    <canvas id="graph-rus-1"></canvas>
                </div>
            </div>

                <!-- Partie comparaison panne -->

            <div class="affichage-rus-3 cache">
                <div class="link">
                    <ul>
                        <li  class="not-active">
                            <a class="vitesse4 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif4 not-active">Effectif</a>
                        </li>
                        <li>
                            <a class="panne4">Panne</a>
                        </li>
                        <li class="not-active">
                            <a class="affluence4 not-active">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison panne -->

                <div class="container-graph">
                    <div class="graph2">
                        <canvas id="graph-rus-2"></canvas>
                    </div>
                    <div class="graph2">
                        <canvas id="graph-rus-3"></canvas>
                    </div>
                </div>
            </div>

            <!-- Partie comparaison affluence -->

            <div class="affichage-rus-4 cache">
                <div class="link">
                    <ul>
                        <li class="not-active">
                            <a class="vitesse4 not-active">Vitesse</a>
                        </li>
                        <li class="not-active">
                            <a class="effectif4 not-active">Effectif</a>
                        </li>
                        <li class="not-active">
                            <a class="panne4 not-active">Panne</a>
                        </li>
                        <li>
                            <a class="affluence4">Affluence</a>
                        </li>
                    </ul>
                </div>

                <!-- Graphique comparaison affluence -->

                <div class="graph1">
                    <canvas id="graph-rus-4"></canvas>
                </div>             
            </div>

        </section>

        </div>


    </main>

    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $('.slider').slick({
            arrows: false,
            dots: true,
            autoplay: true,
        });
    </script>

<script>
    let tgv = document.querySelector('.img-ligne2')
    let autre = document.querySelector('.img-ligne1')
    let body = document.querySelector('body')
    
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY / (body.clientHeight - window.innerHeight)
        let scrollPercent = scroll * 100
        tgv.style.marginLeft = (scrollPercent - 90) + '%'
        autre.style.marginLeft = (scrollPercent * 10 - 940) + '%'
    })
</script>

<script>
    let tgv3 = document.querySelector('.img-ligne6')
    let autre3 = document.querySelector('.img-ligne5')
    let body3 = document.querySelector('body')
    
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY / (body3.clientHeight - window.innerHeight)
        let scrollPercent = scroll * 100
        tgv3.style.marginLeft = (scrollPercent - 90) + '%'
        autre3.style.marginLeft = (scrollPercent * 10 - 940) + '%'
    })
</script>

<script>
    let tgv2 = document.querySelector('.img-ligne4')
    let autre2 = document.querySelector('.img-ligne3')
    let body2 = document.querySelector('body')
    
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY / (body2.clientHeight - window.innerHeight)
        let scrollPercent = scroll * 100
        tgv2.style.marginLeft = (scrollPercent - 90) + '%'
        autre2.style.marginLeft = (scrollPercent * 10 - 940) + '%'
    })
</script>

<script>
    let tgv4 = document.querySelector('.img-ligne8')
    let autre4 = document.querySelector('.img-ligne7')
    let body4 = document.querySelector('body')
    
    window.addEventListener('scroll', () => {
        let scroll = window.scrollY / (body4.clientHeight - window.innerHeight)
        let scrollPercent = scroll * 100
        tgv4.style.marginLeft = (scrollPercent - 90) + '%'
        autre4.style.marginLeft = (scrollPercent * 10 - 940) + '%'
    })
</script>

    <script>
        AOS.init();
    </script>

    <script>

        var bel = document.getElementById('belgique');
        var jpn = document.getElementById('japon');
        var all = document.getElementById('allemagne');
        var rus = document.getElementById('russie');
        let affbel = document.querySelector('.cache-selection-belgique');
        let affjpn = document.querySelector('.cache-selection-japon');
        let affall = document.querySelector('.cache-selection-allemagne');
        let affrus = document.querySelector('.cache-selection-russie');

        bel.addEventListener('click', () => {
                affbel.style.display = 'block';
                affall.style.display = 'none';
                affjpn.style.display = 'none';
                affrus.style.display = 'none';
        });

        rus.addEventListener('click', () => {
            affbel.style.display = 'none';
                affall.style.display = 'none';
                affjpn.style.display = 'none';
                affrus.style.display = 'block';
        });

        all.addEventListener('click', () => {
            affbel.style.display = 'none';
                affall.style.display = 'block';
                affjpn.style.display = 'none';
                affrus.style.display = 'none';
        });
        jpn.addEventListener('click', () => {
            affbel.style.display = 'none';
                affall.style.display = 'none';
                affjpn.style.display = 'block';
                affrus.style.display = 'none';
        });

    </script>

<script>
    var ctx = document.getElementById('graph-all-3').getContext('2d');

    var data = {
        labels: [
        'Problèmes techniques',
        'Problèmes humains'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [500, 500],
        backgroundColor: [
        'rgb(255, 99, 132)',
        '#425FC6',
        ],
        hoverOffset: 4
    }]
    }

    var options

    var config = {
    type: 'doughnut',
    data,
    };

    var graph2 = new Chart(ctx, config);
</script>

<script>
    var ctx = document.getElementById('graph-jpn-3').getContext('2d');

    var data = {
        labels: [
        'Problèmes techniques',
        'Problèmes humains'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [500, 500],
        backgroundColor: [
        'rgb(255, 99, 132)',
        '#425FC6',
        ],
        hoverOffset: 4
    }]
    }

    var options

    var config = {
    type: 'doughnut',
    data,
    };

    var graph2 = new Chart(ctx, config);
</script>

<script>
    var ctx = document.getElementById('graph-bel-3').getContext('2d');

    var data = {
        labels: [
        'Problèmes techniques',
        'Problèmes humains'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [500, 500],
        backgroundColor: [
        'rgb(255, 99, 132)',
        '#425FC6',
        ],
        hoverOffset: 4
    }]
    }

    var options

    var config = {
    type: 'doughnut',
    data,
    };

    var graph2 = new Chart(ctx, config);
</script>

<script>
    var ctx = document.getElementById('graph-rus-3').getContext('2d');

    var data = {
        labels: [
        'Problèmes techniques',
        'Problèmes humains'
    ],
    datasets: [{
        label: 'My First Dataset',
        data: [500, 500],
        backgroundColor: [
        'rgb(255, 99, 132)',
        '#425FC6',
        ],
        hoverOffset: 4
    }]
    }

    var options

    var config = {
    type: 'doughnut',
    data,
    };

    var graph2 = new Chart(ctx, config);
</script>


    <script>
        var ctx = document.getElementById('graph-all-2').getContext('2d');

        var data = {
            labels: [
            'Problèmes techniques',
            'Problèmes humains'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [500, 500],
            backgroundColor: [
            'rgb(255, 99, 132)',
            '#425FC6',
            ],
            hoverOffset: 4
        }]
        }

        var options

        var config = {
        type: 'doughnut',
        data,
        };

        var graph2 = new Chart(ctx, config);
    </script>

<script>
        var ctx = document.getElementById('graph-jpn-2').getContext('2d');

        var data = {
            labels: [
            'Problèmes techniques',
            'Problèmes humains'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [500, 500],
            backgroundColor: [
            'rgb(255, 99, 132)',
            '#425FC6',
            ],
            hoverOffset: 4
        }]
        }

        var options

        var config = {
        type: 'doughnut',
        data,
        };

        var graph2 = new Chart(ctx, config);
    </script>

<script>
        var ctx = document.getElementById('graph-bel-2').getContext('2d');

        var data = {
            labels: [
            'Problèmes techniques',
            'Problèmes humains'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [500, 500],
            backgroundColor: [
            'rgb(255, 99, 132)',
            '#425FC6',
            ],
            hoverOffset: 4
        }]
        }

        var options

        var config = {
        type: 'doughnut',
        data,
        };

        var graph2 = new Chart(ctx, config);
    </script>

<script>
        var ctx = document.getElementById('graph-rus-2').getContext('2d');

        var data = {
            labels: [
            'Problèmes techniques',
            'Problèmes humains'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [500, 500],
            backgroundColor: [
            'rgb(255, 99, 132)',
            '#425FC6',
            ],
            hoverOffset: 4
        }]
        }

        var options

        var config = {
        type: 'doughnut',
        data,
        };

        var graph2 = new Chart(ctx, config);
    </script>

    <script>
        var ctx = document.getElementById('graph-all-1').getContext('2d');

        var data = {
            labels: ['Effectif total', 'Cadre', 'Employés', '???'],
            datasets: [
            {
          label: "TGV",
          backgroundColor: "rgb(255, 99, 132)",
          data: [133,221,783,2478],
        }, {
          label: "Shinkansen",
          backgroundColor: "#425FC6",
          data: [408,547,675,734]
        }
            ]
        }

        var options = {
            legend: {
                    fontColor: 'white',
            }
        }

        var config = {
        type: 'bar',
        data,
        options: {
            indexAxis: 'y',
        }
        };

        var graph1 = new Chart(ctx, config);


    </script>

<script>
        var ctx = document.getElementById('graph-jpn-1').getContext('2d');

        var data = {
            labels: ['Effectif total', 'Cadre', 'Employés', '???'],
            datasets: [
            {
          label: "TGV",
          backgroundColor: "rgb(255, 99, 132)",
          data: [133,221,783,2478],
        }, {
          label: "Shinkansen",
          backgroundColor: "#425FC6",
          data: [408,547,675,734]
        }
            ]
        }

        var options = {
            legend: {
                    fontColor: 'white',
            }
        }

        var config = {
        type: 'bar',
        data,
        options: {
            indexAxis: 'y',
        }
        };

        var graph1 = new Chart(ctx, config);


    </script>

<script>
        var ctx = document.getElementById('graph-bel-1').getContext('2d');

        var data = {
            labels: ['Effectif total', 'Cadre', 'Employés', '???'],
            datasets: [
            {
          label: "TGV",
          backgroundColor: "rgb(255, 99, 132)",
          data: [133,221,783,2478],
        }, {
          label: "Shinkansen",
          backgroundColor: "#425FC6",
          data: [408,547,675,734]
        }
            ]
        }

        var options = {
            legend: {
                    fontColor: 'white',
            }
        }

        var config = {
        type: 'bar',
        data,
        options: {
            indexAxis: 'y',
        }
        };

        var graph1 = new Chart(ctx, config);


    </script>

<script>
        var ctx = document.getElementById('graph-rus-1').getContext('2d');

        var data = {
            labels: ['Effectif total', 'Cadre', 'Employés', '???'],
            datasets: [
            {
          label: "TGV",
          backgroundColor: "rgb(255, 99, 132)",
          data: [133,221,783,2478],
        }, {
          label: "Shinkansen",
          backgroundColor: "#425FC6",
          data: [408,547,675,734]
        }
            ]
        }

        var options = {
            legend: {
                    fontColor: 'white',
            }
        }

        var config = {
        type: 'bar',
        data,
        options: {
            indexAxis: 'y',
        }
        };

        var graph1 = new Chart(ctx, config);


    </script>

<script>
    var ctx = document.getElementById('graph-all-4').getContext('2d');

    var data = {
        labels: ['Passagers par rames', 'Passagers moyens', 'Passagers totaux'],
        datasets: [
        {
      label: "TGV",
      backgroundColor: "rgb(255, 99, 132)",
      data: [133,221,783,2478],
    }, {
      label: "Shinkansen",
      backgroundColor: "#425FC6",
      data: [408,547,675,734]
    }
        ]
    }

    var options = {
        legend: {
                fontColor: 'white',
        }
    }

    var config = {
    type: 'bar',
    data,
    options,
    };

    var graph1 = new Chart(ctx, config);


</script>

<script>
    var ctx = document.getElementById('graph-jpn-4').getContext('2d');

    var data = {
        labels: ['Passagers par rames', 'Passagers moyens', 'Passagers totaux'],
        datasets: [
        {
      label: "TGV",
      backgroundColor: "rgb(255, 99, 132)",
      data: [133,221,783,2478],
    }, {
      label: "Shinkansen",
      backgroundColor: "#425FC6",
      data: [408,547,675,734]
    }
        ]
    }

    var options = {
        legend: {
                fontColor: 'white',
        }
    }

    var config = {
    type: 'bar',
    data,
    options,
    };

    var graph1 = new Chart(ctx, config);


</script>

<script>
    var ctx = document.getElementById('graph-bel-4').getContext('2d');

    var data = {
        labels: ['Passagers par rames', 'Passagers moyens', 'Passagers totaux'],
        datasets: [
        {
      label: "TGV",
      backgroundColor: "rgb(255, 99, 132)",
      data: [133,221,783,2478],
    }, {
      label: "Shinkansen",
      backgroundColor: "#425FC6",
      data: [408,547,675,734]
    }
        ]
    }

    var options = {
        legend: {
                fontColor: 'white',
        }
    }

    var config = {
    type: 'bar',
    data,
    options,
    };

    var graph1 = new Chart(ctx, config);


</script>

<script>
    var ctx = document.getElementById('graph-rus-4').getContext('2d');

    var data = {
        labels: ['Passagers par rames', 'Passagers moyens', 'Passagers totaux'],
        datasets: [
        {
      label: "TGV",
      backgroundColor: "rgb(255, 99, 132)",
      data: [133,221,783,2478],
    }, {
      label: "Shinkansen",
      backgroundColor: "#425FC6",
      data: [408,547,675,734]
    }
        ]
    }

    var options = {
        legend: {
                fontColor: 'white',
        }
    }

    var config = {
    type: 'bar',
    data,
    options,
    };

    var graph1 = new Chart(ctx, config);


</script>

<script>
    var vitesse1 = document.querySelectorAll('a.vitesse1');
    var vitesse2 = document.querySelectorAll('a.vitesse2');
    var vitesse3 = document.querySelectorAll('a.vitesse3');
    var vitesse4 = document.querySelectorAll('a.vitesse4');

    var panne1 = document.querySelectorAll('a.panne1');
    var panne2 = document.querySelectorAll('a.panne2');
    var panne3 = document.querySelectorAll('a.panne3');
    var panne4 = document.querySelectorAll('a.panne4');

    var effectif1 = document.querySelectorAll('a.effectif1');
    var effectif2 = document.querySelectorAll('a.effectif2');
    var effectif3 = document.querySelectorAll('a.effectif3');
    var effectif4 = document.querySelectorAll('a.effectif4');

    var affluence1 = document.querySelectorAll('a.affluence1');
    var affluence2 = document.querySelectorAll('a.affluence2');
    var affluence3 = document.querySelectorAll('a.affluence3');
    var affluence4 = document.querySelectorAll('a.affluence4');


    for (i = 0; i < vitesse1.length; i++) {
        effectif1[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-all-1").classList.add("cache");
            document.querySelector(".affichage-all-3").classList.add("cache");
            document.querySelector(".affichage-all-2").classList.remove("cache");
            document.querySelector(".affichage-all-4").classList.add("cache");
        };

        panne1[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-all-1").classList.add("cache");
            document.querySelector(".affichage-all-3").classList.remove("cache");
            document.querySelector(".affichage-all-2").classList.add("cache");
            document.querySelector(".affichage-all-4").classList.add("cache");
        };

        vitesse1[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-all-1").classList.remove("cache");
            document.querySelector(".affichage-all-3").classList.add("cache");
            document.querySelector(".affichage-all-2").classList.add("cache");
            document.querySelector(".affichage-all-4").classList.add("cache");
        };

        affluence1[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-all-1").classList.add("cache");
            document.querySelector(".affichage-all-3").classList.add("cache");
            document.querySelector(".affichage-all-2").classList.add("cache");
            document.querySelector(".affichage-all-4").classList.remove("cache");
        };
    }

    
    for (i = 0; i < vitesse2.length; i++) {
        effectif2[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-jpn-1").classList.add("cache");
            document.querySelector(".affichage-jpn-3").classList.add("cache");
            document.querySelector(".affichage-jpn-2").classList.remove("cache");
            document.querySelector(".affichage-jpn-4").classList.add("cache");
        };

        panne2[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-jpn-1").classList.add("cache");
            document.querySelector(".affichage-jpn-3").classList.remove("cache");
            document.querySelector(".affichage-jpn-2").classList.add("cache");
            document.querySelector(".affichage-jpn-4").classList.add("cache");
        };

        vitesse2[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-jpn-1").classList.remove("cache");
            document.querySelector(".affichage-jpn-3").classList.add("cache");
            document.querySelector(".affichage-jpn-2").classList.add("cache");
            document.querySelector(".affichage-jpn-4").classList.add("cache");
        };

        affluence2[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-jpn-1").classList.add("cache");
            document.querySelector(".affichage-jpn-3").classList.add("cache");
            document.querySelector(".affichage-jpn-2").classList.add("cache");
            document.querySelector(".affichage-jpn-4").classList.remove("cache");
        };
    }


    for (i = 0; i < vitesse3.length; i++) {
        effectif3[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-bel-1").classList.add("cache");
            document.querySelector(".affichage-bel-3").classList.add("cache");
            document.querySelector(".affichage-bel-2").classList.remove("cache");
            document.querySelector(".affichage-bel-4").classList.add("cache");
        };

        panne3[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-bel-1").classList.add("cache");
            document.querySelector(".affichage-bel-3").classList.remove("cache");
            document.querySelector(".affichage-bel-2").classList.add("cache");
            document.querySelector(".affichage-bel-4").classList.add("cache");
        };

        vitesse3[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-bel-1").classList.remove("cache");
            document.querySelector(".affichage-bel-3").classList.add("cache");
            document.querySelector(".affichage-bel-2").classList.add("cache");
            document.querySelector(".affichage-bel-4").classList.add("cache");
        };

        affluence3[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-bel-1").classList.add("cache");
            document.querySelector(".affichage-bel-3").classList.add("cache");
            document.querySelector(".affichage-bel-2").classList.add("cache");
            document.querySelector(".affichage-bel-4").classList.remove("cache");
        };
    }

    
    for (i = 0; i < vitesse4.length; i++) {
        effectif4[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-rus-1").classList.add("cache");
            document.querySelector(".affichage-rus-3").classList.add("cache");
            document.querySelector(".affichage-rus-2").classList.remove("cache");
            document.querySelector(".affichage-rus-4").classList.add("cache");
        };

        panne4[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-rus-1").classList.add("cache");
            document.querySelector(".affichage-rus-3").classList.remove("cache");
            document.querySelector(".affichage-rus-2").classList.add("cache");
            document.querySelector(".affichage-rus-4").classList.add("cache");
        };

        vitesse4[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-rus-1").classList.remove("cache");
            document.querySelector(".affichage-rus-3").classList.add("cache");
            document.querySelector(".affichage-rus-2").classList.add("cache");
            document.querySelector(".affichage-rus-4").classList.add("cache");
        };

        affluence4[i].onclick = (event) =>{
            event.preventDefault();
            document.querySelector(".affichage-rus-1").classList.add("cache");
            document.querySelector(".affichage-rus-3").classList.add("cache");
            document.querySelector(".affichage-rus-2").classList.add("cache");
            document.querySelector(".affichage-rus-4").classList.remove("cache");
        };
    }


</script>

</body>
</html>