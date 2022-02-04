<?php


namespace App\DataFixtures;

use App\Entity\Bateau;

use App\Entity\Musee;
use App\Entity\Creneau;
use App\Entity\Temoignage;
use App\Entity\Planning;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Création du musée
        $musee = new Musee();
        $musee->setHeureOuverture('10:00');
        $musee->setHeureFermeture('17:00');
        $manager->persist($musee);


        //Liste des bateaux
        $bateau1 = new Bateau();
        $bateau1->setNomUnique('bat1');
        $bateau1->setNom('FRANCE 1');
        $bateau1->setDescription('Construit en 1958. Ultime navire météorologique stationnaire français, classé Monument Historique le 24 02 04.');
        $bateau1->setLat(46.154231);
        $bateau1->setLon(-1.150085);
        $bateau1->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/france__1_g._l_ss_radome_067.jpg');
        $bateau1->setVisitable(true);
        $manager->persist($bateau1);

        $bateau2 = new Bateau();
        $bateau2->setNomUnique('bat2');
        $bateau2->setNom('SAINT GILLES');
        $bateau2->setDescription('Construit en 1958. Dernier remorqueur portuaire et de haute mer à moteur réversible. Il fut lancé par les Ateliers et Chantiers de La Rochelle-Pallice. Classé Monument Historique le 17 07 95.');
        $bateau2->setLat(46.154735);
        $bateau2->setLon(-1.150677);
        $bateau2->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/DSC_5022_0.jpg');
        $bateau2->setVisitable(true);
        $manager->persist($bateau2);

        $bateau3 = new Bateau();
        $bateau3->setNomUnique('bat3');
        $bateau3->setNom('DRAGUE TD6');
        $bateau3->setDescription('Construit en 1906. La vieille drague à vapeur de La Rochelle, témoin de la lutte contre l’envasement que mènent avec acharnement depuis des siècles les hommes de nos ports. Classée Monument Historique le 06 11 92.');
        $bateau3->setLat(46.154679);
        $bateau3->setLon(-1.152152);
        $bateau3->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/Drague_TD6_3b.jpg');
        $bateau3->setVisitable(true);
        $manager->persist($bateau3);

        $bateau4 = new Bateau();
        $bateau4->setNomUnique('bat4');
        $bateau4->setNom('JOSHUA');
        $bateau4->setDescription('Construit en 1962. Le compagnon de route du mythique navigateur-philosophe Bernard Moitessier, écrivain de talent et premier homme à réaliser le tour du monde en solitaire et sans escale. Classé Monument Historique le 06 08 93.');
        $bateau4->setLat(46.150547);
        $bateau4->setLon(-1.163198);
        $bateau4->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/portrait_joshua_web2.jpg');
        $bateau4->setVisitable(true);
        $manager->persist($bateau4);

        $bateau5 = new Bateau();
        $bateau5->setNomUnique('bat5');
        $bateau5->setNom('ANGOUMOIS');
        $bateau5->setDescription('Construit en 1969. Premier et ultime chalutier pêche arrière à rampe et pont couvert de la pêche industrielle rochelaise. Ce navire fut construit pour le grand armement des ARPV (Association Rochelaise de Pêche à Vapeur). Classé Monument Historique le 17/07/91.');
        $bateau5->setLat(46.150218);
        $bateau5->setLon(-1.160928);
        $bateau5->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/DSC_3759.jpg');
        $bateau5->setVisitable(false);
        $manager->persist($bateau5);

        $bateau6 = new Bateau();
        $bateau6->setNomUnique('bat6');
        $bateau6->setNom('MANUEL JOËL');
        $bateau6->setDescription('Construit en 1954 sur le site actuel du Musée Maritime par le chantier de l’Union Sablaise, c’est le dernier chalutier classique en bois du port. Classé Monument Historique le 22 09 94.');
        $bateau6->setLat(46.146974);
        $bateau6->setLon(-1.165536);
        $bateau6->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/Site_manuel-Joel.jpg');
        $bateau6->setVisitable(false);
        $manager->persist($bateau6);

        $bateau7 = new Bateau();
        $bateau7->setNomUnique('bat7');
        $bateau7->setNom('LE CANOT MAJOR DU DUPERRE');
        $bateau7->setDescription('Construit en 1954. C’était le canot major de l’escorteur d’escadre Le Duperré dont la Ville de La Rochelle était la marraine. A la demande de Michel Crépeau, il fut offert à la Ville par la Marine Nationale à l’occasion du remplacement de l’escorteur par la frégate GERMINAL. Classé Monument Historique le 28/12/2011.');
        $bateau7->setLat(46.146709);
        $bateau7->setLon(-1.1661177);
        $bateau7->setPhoto('https://museemaritime.larochelle.fr/fileadmin/_processed_/a/8/csm_Duperre-2015-JulienChauvet_86b7044b46.jpg');
        $bateau7->setVisitable(false);
        $manager->persist($bateau7);

        $bateau8 = new Bateau();
        $bateau8->setNomUnique('bat8');
        $bateau8->setNom('CAPITAINE DE FRÉGATE LEVERGER');
        $bateau8->setDescription('Construit en 1954. Cet ancien canot « tous temps » de la SNSM identique à celui de la Rochelle est un don de la glorieuse société de sauvetage en mer.');
        $bateau8->setLat(46.146516);
        $bateau8->setLon(-1.166949);
        $bateau8->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/img_temoin_detail/navire/dsc_0179snsm.jpg');
        $bateau8->setVisitable(false);
        $manager->persist($bateau8);


        //Témoignages de bat1
        $temoignage1Frace1 = new Temoignage();
        $temoignage1Frace1->setBateauTemoignages($bateau1);

        $temoignage1Frace1->setAuteur('Jean-Paul BENECH');
        $temoignage1Frace1->setDescription('24h/24 PAR TOUS LES TEMPS, PAR TOUTES LES MERS: La navigationLancer de ballons sonde, de nuit, à bord du France 1  à bord de ces frégates météo était très différente du travail à bord des autres navires de la marine marchande. Pour les équipages de Delmas-Vieljeux, l’armement rochelais, cela n’avait rien à voir avec le travail à bord d’un navire qui faisait de longues traversées et qui devait effectuer les manœuvres aux escales, charger et décharger. Certains marins appréciaient ce rythme plus tranquille. Par contre les météorologistes, eux, avaient un emploi du temps contraignant avec des quarts d’observation, des relevés, des lâchers de ballon à assurer de nuit comme de jour, vingt-quatre heures sur vingt-quatre par tous les temps et par toutes les mers. La vie à bord était tributaire des conditions de mer et parfois, cela devait être extrêmement pénible. Je n’ai pas connu ces conditions à l’époque, parce que c’était l’été. Il a fait très beau, avec un peu de mauvais temps en passant l’Irlande, mais j’ai entendu des témoignages de collègues qui ont connu du « dur »');
        $temoignage1Frace1->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/mmlr_014148md_0.jpg');
        $manager->persist($temoignage1Frace1);

        $temoignage2Frace1 = new Temoignage();
        $temoignage2Frace1->setBateauTemoignages($bateau1);
        $temoignage2Frace1->setAuteur('Pierre LAYEC');
        $temoignage2Frace1->setDescription('LOISIRS DU BORD: Bien sûr, quand il y avait trop de mauvais temps, on ne mettait jamais le nez dehors. On passait le temps libre, à faire des concours de belote et de vache. Ces concours étaient  pris très au sérieux ! A la vache, les deux partenaires restaient ensemble tout le temps du concours et souvent le temps de plusieurs points. J’ai disputé des parties contre les officiers ou les mécanos. Si on pouvait rigoler ensemble après, jamais, cela ne nous arrivait pendant la partie, l’honneur était en jeu ! Comme chacun le sait, la vache se joue avec des gestes et des mimiques. Les  partenaires s’épiant mutuellement, gare à celui qui n’était pas assez rapide pour dire son jeu à son partenaire sans être vu ! Les vainqueurs recevaient une bonne bouteille d’apéro qui était largement partagée avec tous dans la bonne humeur en attendant le prochain concours. On avait aussi deux fois par semaine du cinéma, du vrai, avec des beaux films. On posait nos fesses sur le sol du réfectoire de l’équipage, et bercés par le roulis, on regardait. Quelquefois,  si le postal ne l’avait pas correctement coincé, un tiroir avec ses couverts nous atterrissait dessus.  Je me rappelle d’avoir vu des  films introuvables maintenant : “Le médecin de Stalingrad”, ” Chiens, à vous de crever“. Quand on pouvait tenir debout, on faisait des concours de palets sur le pont supérieur.  Cela n’a pas empêché que bien des palets finissent leur vie à la mer à cause d’un coup de roulis plus fort que l’autre ! Le point se passait de cette façon, entre travail et passe-temps, en prenant une bouffée d’air  quand le temps le permettait');
        $temoignage2Frace1->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/402/original/6006.jpg');
        $manager->persist($temoignage2Frace1);

        //Témoignages de bat2
        $temoignage1bat2 = new Temoignage();
        $temoignage1bat2->setBateauTemoignages($bateau2);
        $temoignage1bat2->setAuteur('Erwan Jégo');
        $temoignage1bat2->setDescription('Quand je suis à La Rochelle,  il n’y a pas un jour où je ne passe voir le Saint Gilles sur le slipway. Je suis très fier de le voir là-haut, tout brillant et restauré avec l’espoir de sa prochaine remise à l’eau. (NDLR : interview réalisé en 2004. Le Saint Gilles était alors en travaux sur le slipway. Il est actuellement à l’eau, amarré à couple du France I. Ce bateau me tient à cœur, J’ai vécu des moments très forts à son bord pendant 5/6 ans et l’ai commandé après Georges Terrier. Je me souviens en particulier du remorquage de l’Ile de France dans le golfe de Gascogne. J’ai aussi commandé son sister-ship, Le Guérande que j’ai emmené aux Antilles. Quand j’ai pris le commandement du Saint Gilles, nous étions basés à La Pallice. On rentrait les cargos et on effectuait divers petits remorquages côtiers. C’était un remorqueur de haute mer et c’est vrai que ces bateaux étaient construits pour l’affronter. J’en ai fait l’expérience avec « Le Guérande »  en traversant l’Atlantique dans une furie de temps. Je devais l’amener aux Antilles où Gérard Gomez voulait créer une société de remorquage. Il y avait dépression sur dépression et pas de fenêtre météo pour passer le golfe de Gascogne. L’équipage avait embarqué, mon directeur était parmi nous et voulait voir son bateau partir et il me disait : « Erwan, tu me coûtes cher, l’équipage est au complet. Il y a des dépressions, c’est vrai,  mais c’est un remorqueur et un remorqueur,  ça prend la mer par tous les temps » Donc finalement, Gérard, mon patron et ami m’a tellement cassé les pieds que je suis parti malgré les consignes de l’administrateur des Affaires Maritimes.  Ce bateau avait 35 ans et il aurait fallu attendre un meilleur temps …On s’est pris une branlée dans le Golfe de Gascogne avec des creux de 10/12 mètres. Les Guadeloupéens ne connaissaient pas ça bien entendu. Ils étaient affalés à la passerelle et il n’y avait plus personne à la bécane ! Le moteur tournait …on se demandait comment… et le bateau avançait à l’épaulée vers la grosse lame… (Avancer à l’épaulée : prendre la mer par l’épaule du navire, c’est à dire par le coté pour empêcher le navire de trop s’immerger au tangage). On a gardé ce temps jusqu’après le Cap Finistère. Ca s’est assagi vers Les Canaries. Au début de la mise en place de la société de remorquage, on n’avait pas beaucoup et l’armateur se faisait du souci. Je le rassurais en lui disant qu’il fallait le temps de se faire des clients. On a pu très vite montrer ce qu’on pouvait faire en sauvant un magnifique voilier qui s’était foutu au sec aux Saintes, un gros catamaran à moteur qui transportait 400 passagers, un cargo en perdition sur les côtes guadeloupéennes … Ce remorqueur qui avait été rebaptisé « Boris » a tourné pendant 10/12 ans et a été remplacé dernièrement par un bateau que j’avais commandé aussi à la Pallice Le Ouessant. Comme le Saint Gilles, ce navire, le Guérande avait été construit lui aussi à La Pallice. Il était un peu plus gros et plus puissant et avait été armé par l’URO à Bordeaux avant d’être vendu aux Antilles.');
        $temoignage1bat2->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/781/original/fpmm_04003.jpg');
        $manager->persist($temoignage1bat2);

        //Témoignages de bat3
        $temoignage1bat3 = new Temoignage();
        $temoignage1bat3->setBateauTemoignages($bateau3);
        $temoignage1bat3->setAuteur('Maurice Garet');
        $temoignage1bat3->setDescription("J'étais là pour la mise en route de la Cap d'Aunis. La Cap d'Aunis, à chaque passage, extrait 1000 m3. C'est une drague aspiratrice et ce qu'elle extrait est plus liquide, c'est un mélange eau/vase. Ce n'est pas de la vase concentrée comme ce que l'on enlevait avec les godets et cela équivaut à 800 M3 à chaque passage ! La rotation est beaucoup plus rapide. C'est beaucoup moins dangereux et moins pénible que sur la drague à vapeur où tout était vraiment lourd à manœuvrer. D'ailleurs, ce n'est pas difficile, ils sont 6 à bord…On était 24 sur le train de drague ! Et pour le plan de dragage, nous on le suivait visuellement avec des repères à terre. Tandis que sur la Cap deAunis, c est au GPS !");
        $temoignage1bat3->setPhoto("http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/584/original/fpmm_02136.jpg");
        $manager->persist($temoignage1bat3);

        $temoignage2bat3 = new Temoignage();
        $temoignage2bat3->setBateauTemoignages($bateau3);
        $temoignage2bat3->setAuteur("Roger Barbotin");
        $temoignage2bat3->setDescription("J’étais patron du Saint-Marc, le porteur à déblais qui accompagnait la drague à vapeur TD6. Ce porteur ainsi que son sistership, le Bout blanc recevait les matériaux qui étaient extraits par la drague. Cette vase était ensuite libérée par des portes à clapets qui s’ouvraient sous le navire. Nous transportions environ 520 tonnes par voyage. Le Saint-Marc mesurait plus de 42m de longueur et près de 10m de large. Nous étions 6 à bord, un patron, un second, 2 mécaniciens et 2 matelots. On travaillait selon les marées. La drague sortait du fond de la vase, bien sûr, mais aussi toutes sortes de choses : des mines, des grenades, des bombes, des voitures, des camions, des motos …Il nous fallait sortir tout ça, dégager le long des quais des souilles de façon à enlever tout ce qui était dangereux. Il nous est même arrivé de sortir des wagons, des poutrelles de fer qui étaient d’un poids impressionnant ! Nous avons repêché l’ancre d’un navire qui était venu au môle d’escale du port de commerce de La Pallice et qui avait dû appareiller en catastrophe. Il avait perdu son ancre, une ancre qui faisait plus de 10 tonnes et qu’il a fallu embarquer sur le Saint-Marc et qui a été soulevée et déposée avec une grue sur les quais. ");
        $temoignage2bat3->setPhoto("http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/mmlr_004863.jpg");
        $manager->persist($temoignage2bat3);

        //Témoignages de bat4
        $temoignage1Joshua = new Temoignage();
        $temoignage1Joshua->setBateauTemoignages($bateau4);
        $temoignage1Joshua->setAuteur('Véronique Lerebours');
        $temoignage1Joshua->setDescription('Compagne des dernières années de la vie de Bernard Moitessier, elle venait de sortir son livre « Bernard Moitessier, au fil des rencontres  (Arthaud).-  Musée maritime de la Rochelle : Véronique Lerebours, qui était Bernard Moitessier ?-  Véronique Lerebours : c’est difficile de répondre en quelques mots amis je dirais que c’était une formidable énergie, une formidable ténacité à vivre et à surmonter les épreuves et surtout à oser partir dans des directions diverses  en  fonction de ce qui se présentait »- Musée maritime de la Rochelle : on a l’image d’un homme solitaire.-  Véronique Lerebours : Bernard Moitessier a été connu par ses navigations en solitaire qui ont marqué l’histoire de la voile parce qu’il avait fait quelque chose d’extraordinaire. Mais, cette expérience ne rend pas compte de l’homme dans toute sa complexité.  C’était  aussi un formidable homme de rencontres.  Il avait besoin de contacts avec les autres, c’était un homme de communication. Cet aspect de sa personnalité est moins connu parce qu’on a mis surtout  l’accent sur sa capacité à vivre en solitaire.- Musée maritime de la Rochelle : vous avez navigué avec bernard Moitessier sur son dernier bateau, Tamata.   Véronique Lerebours : Tamata a vu le jour à la suite du naufrage de Joshua en 1982 au Mexique.  Bernard avait à l’époque 58 ans.  Pour lui, l’idée de vivre sans bateau, c’était absolument impossible. Il s’est créé toute une chaîne de solidarité qui  l’a aidé à construire un nouveau bateau. Il le voulait plus petit pour pouvoir l’entretenir plus facilement.  Il approchait de la soixantaine et n’avait plus la même force qu’à 30 ans. Il voulait un bateau de 9 mètres. On a réussi à lui construire un bateau de 10 mètres en acier où l’on retrouvait toutes les caractéristiques de simplicité, de sobriété de Joshua : un bateau en acier robuste. C’est un cotre et non plus un ketch. Tout est simple : un bateau avec un moteur à refroidissement à air, démarrage à la manivelle. Pas  d’électricité, pas d’alternateur, juste une petite batterie avec un panneau solaire. Tout est simple parce que Bernard a toujours eu pour philosophie de ne posséder que des choses qu’il pouvait entretenir lui-même. Tamata avait atteint un niveau de simplicité encore plus poussé que Joshua, mais avec la même capacité marine. C’était un bateau marin, un bateau solide, c’est toujours …car ce bateau navigue encore  Véronique Lerebours  Bernard Moitessier vous parlait-il de Joshua?');
        $temoignage1Joshua->setPhoto('http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/554/original/pict0148_quimper.jpg');
        $manager->persist($temoignage1Joshua);

        //Témoignages de bat5
        $temoignage1bat5 = new Temoignage();
        $temoignage1bat5 ->setBateauTemoignages($bateau5);
        $temoignage1bat5 -> setAuteur("André Lelay");
        $temoignage1bat5 -> setDescription("J'ai été cuisinier à la pêche pendant environ 45 ans. J'ai embarqué sur l'Angoumois dans les années 72 grâce au second qui m'avait demandé : « Dédé, tiens, il manque un cuisinier sur l'Angoumois est-ce que ça t'intéresserait ? », j'ai dit «OK» ! On est allé voir le patron du bateau et l'armement et l'affaire était faite ! je suis resté 4 ans à bord de ce bon bateau. Tout se passait bien et j'étais très content : très bonne ambiance et bon équipage. Ce bateau, comme les trois quart des bateaux de cette époque là, était un pêche arrière. Il a été construit dans les années 68.");
        $temoignage1bat5 -> setPhoto("http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/416/original/fpmm_00769.jpg");
        $manager->persist($temoignage1bat5);

        $temoignage2bat5 = new Temoignage();
        $temoignage2bat5 ->setBateauTemoignages($bateau5);
        $temoignage2bat5 -> setAuteur("Daniel Grandener");
        $temoignage2bat5 -> setDescription("Sur les chalutiers pêche arrière comme l’Angoumois, on était abrité. Le principal inconvénient des pêche arrière, c’était que ces bateaux roulaient beaucoup parce qu’ils étaient hauts sur l’eau mais cet inconvénient était aussi un avantage car ils étaient plus haut sur la mer et qu’on prenait moins de paquet de mer par les côtés. Quand le bateau avait le cul dans l’eau, ça montait un peu mais sans plus. Sur les chalutiers classiques, quand on était dans la coursive à travailler et qu’on entendait « attention !!! », tout le monde s’en allait en courant parce que c’était un paquet de mer qui arrivait. Un paquet de mer, c’est plusieurs tonnes d’eau, donc autant vous dire que si vous n’aviez pas pris la précaution d’aller sur le roof, vous étiez balayé ! Si vous vous preniez un paquet de mer en demi-bottes, vous pouviez être sûr que tout était rempli ! Quand c’était un paquet assez fort et que vous n’aviez pas eu le temps de partir, vous vous retrouviez en train de nager dans la coursive, vous étiez trempé ! Le mauvais temps en mer, ce n’était pas très plaisant. Sur les classiques, on était sur le qui-vive sans arrêt. Quand on remontait le chalut, on remontait le paquet de mer avec, tout venait à bord en même temps. On était en travers de la lame à ce moment là alors qu’on sait, qu’en temps normal, un bateau ne se met jamais dans cette position. Pour remonter le chalut sur les bateaux classiques, on n’avait pourtant pas le choix. L’Angoumois, il se mettait « bout à la lame » et il virait, tranquillement, enfin, tranquillement, façon de parler !! Sur les chalutiers classiques, on remontait donc le filet à la houle. Quand le bateau roulait, on tirait le filet et puis quand la houle était à l’opposé, on attendait que ça remonte. Dans le grand Nord, le filet gelait au fur et à mesure qu’on le remontait. Sur certains bateaux, on arrivait, on pêchait le poisson, on le mettait dans les paniers, on le descendait dans la cale, pour ne pas qu'il gèle.  Une fois le chalut remis en pêche, on remontait le poisson pour l'étriper et le lavait puis on le redescendait pour le glacer. Ca m’est arrivé une ou deux fois de voir ça. Sur l’Angoumois, il y avait des aménagements qui facilitaient la vie à bord : une salle de travail pour le poisson, des couchettes plus confortables que sur les bateaux classiques. Sur les classiques, les couchettes étaient souvent situées à l’avant. Quand le bateau plongeait dans le creux de la vague, je peux vous dire qu’on était secoué ! on était balancé en dehors des couchettes… Sur l’Angoumois, on était sur le côté donc même si ça roulait, on était plus confortable. Sur les pêche arrière comme l’Angoumois, on allait souvent en Espagne. Sur les classiques, on allait dans le Nord comme sur Les Baleines, Les Barges, l’Hourtin, le Jalène, le Hellé.");
        $temoignage2bat5 -> setPhoto("http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/416/original/fpmm_00794.jpg");
        $manager->persist($temoignage2bat5);

        //Témoignages de bat6
        $temoignage1bat6 = new Temoignage();
        $temoignage1bat6->setBateauTemoignages($bateau6);
        $temoignage1bat6->setAuteur("Yves Gaubert");
        $temoignage1bat6->setDescription("Début 1992, une nouvelle unité rejoint le Musée Maritime de La Rochelle. Le Manuel-Joël, un chalutier classique en bois de 19,20 m vient enrichir son patrimoine. Ceci a été rendu possible par la volonté d’Henri Teillet, son patron et propriétaire et grâce au « plan pêche » dont le but est de réduire le nombre de bateaux de pêche français pour répondre aux injonctions de la Communauté Européenne. Proche de la retraite, le patron du Manuel-Joël, a voulu profiter des incitations financières à la sortie de flotte pour cesser son activité. Mais il répugnait de voir son bateau détruit, car le bénéfice des subventions les plus importantes était lié à la destruction. Heureusement, l’administration consciente de la nécessité de sauvegarder le patrimoine maritime a assimilé à la démolition la cession d’un navire à un musée à condition de le rendre incapable de prendre la mer. C’est donc le cas de figure qui a été choisi. Il a permis à Henri Teillet de toucher la plus forte subvention liée à la sortie de flotte de son bateau et au Musée Maritime de récupérer le dernier chalutier de pêche sur le coté du port de La Rochelle.");
        $temoignage1bat6->setPhoto("http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/595/original/p1000365.jpg");
        $manager->persist($temoignage1bat6);

        $temoignage2bat6 = new Temoignage();
        $temoignage2bat6->setBateauTemoignages($bateau6);
        $temoignage2bat6->setAuteur("Henri Teillet");
        $temoignage2bat6->setDescription("Je m’appelle Teillet Henri, j’ai 67 ans. Je suis en retraite depuis plusieurs années. J’ai commencé mon métier à 14 ans et demi. J’ai commencé comme mousse, puis comme matelot, comme second, comme patron et après, longtemps après, j’ai eu mon bateau. Pour commander un bateau, il faut avoir un brevet. On peut être armateur mais pas patron, patron c’est une fonction. J’ai commandé le Manuel-Joël pendant 23 ans, jusqu’en 92 et je l’ai offert au musée. Il est classé monument historique. C’est mon père qui l’a construit. Manuel, c’est le nom d’un de mes frères, Emmanuel exactement, mais mon père appelait mon jeune frère Manuel. Joël était le nom du fils d’un autre associé. A l’origine, ce bateau avait été construit pour un regroupement entre des associés de mon père et un patron. Mon père a repris ses parts par la suite. Mon père ne naviguait pas, c’était un charpentier mais dans ce temps là ça se faisait beaucoup : le forgeron, le mécanicien, le charpentier se regroupaient en association pour construire un bateau, ça leur faisait du travail. Mon père l’a gardé pendant sept ans. Quand le bateau a été lancé, j’avais 14 ans et demi et j’ai commencé à bord à 15 ans. Je suis resté dessus deux ans, comme mousse bien sûr, et j’ai été voir ailleurs. Après je suis parti à l’île d’Yeu pour voir le type de pêche et tout le bazar parce que d’une région à l’autre ça change. Je suis allé ensuite faire mon service militaire pendant 24 mois. On était trois copains détachés là, on était bien, sur un petit bateau de 32 000 tonnes …mais on ne naviguait pas ! On faisait les cours du soir. C’est pendant mon service, que j’ai passé mon brevet pour commander les chalutiers. J’étais encore militaire quand je suis parti à St Gilles pour passer l’examen. A 23 ans, j’ai commandé le bateau de mon père, mais j’étais très jeune et quand on est très jeune on fait beaucoup d’erreurs. Notamment l’erreur d’être trop gentil. Disons que quand vous avez 23 ans …Ce n’est pas facile de commander des gars qui ont 20 ou 25 ans de plus que vous !");
        $temoignage2bat6->setPhoto("http://www.histoiresmaritimesrochelaises.fr/sites/histoire-maritime/files/imagecache/phototheque_high/phototheque/595/original/p1000371.jpg");
        $manager->persist($temoignage2bat6);

        //Témoignages de bat7
        $temoignage1bat7 = new Temoignage();
        $temoignage1bat7->setBateauTemoignages($bateau7);
        $temoignage1bat7->setAuteur("Bruno Quinton");
        $temoignage1bat7->setPhoto("https://encrypted-tbn0.gstatic.com/imagesMusee?q=tbn:ANd9GcT8sqPO2eDR4m2uRTmhxefdhEPeBa8Vv90GaUYqlDZBPzfjp7AOtWDbV-WkfhQybfFARGQ&usqp=CAU");
        $temoignage1bat7->setDescription("Entre 1972 et 1974, le Duperré fut une nouvelle fois, transformé en escorteur de lutte anti-sous-marine. Il fut rayé des listes de la flotte le 1er juin 1992. En 2012, sa coque se trouve toujours au cimetière marin de Landévennec (Finistère). L'escorteur d'escadre Duperré était le 5e navire à porter le nom de l'amiral Victore-Guy Duperré (1775-1846), héros, le 23 août 1810, de la bataille de Grand-Port à l'Ile-de-France (aujourd'hui Ile Maurice), seule victoire navale remportée par la flotte française durant le Premier Empire, inscrite sur l'Arc de triomphe de l'Etoile. Victor-Guy Duperré étant Rochelais, l'escorteur d'escadre qui portait son nom avait fait l'objet, en 1957, d'une sorte de parrainage par la ville de La Rochelle. Lors du désarmement du navire, la vedette lui a été offerte par la Marine Nationale le 17 mai 1994. La convention de régularisation de cession gracieuse a été signée le 5 août suivant par le sous-chef d'état-major opérations logistiques de la Marine et la ville l'a aussitôt mise en dépôt au musée maritime. La vedette a été francisée à La Rochelle le 24 août 1998 en catégorie plaisance de 5e catégorie. À ce titre, elle peut s'éloigner de 5 milles des côtes.");
        $manager->persist($temoignage1bat7);

        //Témoignages de bat8
        $temoignage1bat8 = new Temoignage();
        $temoignage1bat8-> setBateauTemoignages($bateau8);
        $temoignage1bat8->setAuteur(" ");
        $temoignage1bat8-> setDescription("Les Sociétés de Sauvetage en Mer sont le symbole vivant de la solidarité des gens de mer, de leur abnégation, de leur courage, de leur dévouement. Dès sa création, le Musée Maritime de La Rochelle a eu à coeur de doter sa flotte patrimoniale d’un canot de la SNSM. A son arrivée à La Rochelle, l’équipe du Musée Maritime procède à un grand carénage. Le bateau est sorti de l’eau entièrement repeint et sa mécanique révisée. Il navigue très souvent pour participer à la sécurité des régates patrimoniales, embarquer le comité, ou participer à des hommages à la SNSM et à des manifestations nautiques.");
        $temoignage1bat8->setPhoto("https://encrypted-tbn0.gstatic.com/imagesMusee?q=tbn:ANd9GcRbD7xz2M_48f5dCfe8hjYEXkvQFpZlPhMONw&usqp=CAU");
        $manager->persist($temoignage1bat8);



        //Tous les plannings
        $planning1 = new Planning();
        $planning1->setBateau($bateau1);
        $manager->persist($planning1);

        $planning2 = new Planning();
        $planning2->setBateau($bateau2);
        $manager->persist($planning2);

        $planning3 = new Planning();
        $planning3->setBateau($bateau3);
        $manager->persist($planning3);

        $planning4 = new Planning();
        $planning4->setBateau($bateau4);
        $manager->persist($planning4);

        $planning5 = new Planning();
        $planning5->setBateau($bateau5);
        $manager->persist($planning5);

        $planning6 = new Planning();
        $planning6->setBateau($bateau6);
        $manager->persist($planning6);

        $planning7 = new Planning();
        $planning7->setBateau($bateau7);
        $manager->persist($planning7);

        $planning8 = new Planning();
        $planning8->setBateau($bateau8);
        $manager->persist($planning8);


        //Tous les creneaux de bateau 1
        $creneau1 = new Creneau();
        $creneau1->setNbPlaceMax(50);
        $creneau1->setNbPlaceRestante(0);
        $creneau1->setDate(new \DateTime('Monday, 20 September 2021 10:00:00'));
        $creneau1->setPlanning($planning1);
        $manager->persist($creneau1);

        $creneau2 = new Creneau();
        $creneau2->setNbPlaceMax(50);
        $creneau2->setNbPlaceRestante(4);
        $creneau2->setDate(new \DateTime('Monday, 20 September 2021 10:30:00'));
        $creneau2->setPlanning($planning1);
        $manager->persist($creneau2);

        $creneau3 = new Creneau();
        $creneau3->setNbPlaceMax(50);
        $creneau3->setNbPlaceRestante(24);
        $creneau3->setDate(new \DateTime('Monday, 20 September 2021 11:00:00'));
        $creneau3->setPlanning($planning1);
        $manager->persist($creneau3);

        $creneau4 = new Creneau();
        $creneau4->setNbPlaceMax(50);
        $creneau4->setNbPlaceRestante(0);
        $creneau4->setDate(new \DateTime('Monday, 20 September 2021 11:30:00'));
        $creneau4->setPlanning($planning1);
        $manager->persist($creneau4);

        $creneau5 = new Creneau();
        $creneau5->setNbPlaceMax(50);
        $creneau5->setNbPlaceRestante(32);
        $creneau5->setDate(new \DateTime('Monday, 20 September 2021 14:30:00'));
        $creneau5->setPlanning($planning1);
        $manager->persist($creneau5);

        $creneau6 = new Creneau();
        $creneau6->setNbPlaceMax(50);
        $creneau6->setNbPlaceRestante(2);
        $creneau6->setDate(new \DateTime('Monday, 20 September 2021 15:00:00'));
        $creneau6->setPlanning($planning1);
        $manager->persist($creneau6);

        $creneau7 = new Creneau();
        $creneau7->setNbPlaceMax(50);
        $creneau7->setNbPlaceRestante(15);
        $creneau7->setDate(new \DateTime('Monday, 20 September 2021 15:30:00'));
        $creneau7->setPlanning($planning1);
        $manager->persist($creneau7);

        $creneau8 = new Creneau();
        $creneau8->setNbPlaceMax(50);
        $creneau8->setNbPlaceRestante(0);
        $creneau8->setDate(new \DateTime('Monday, 20 September 2021 16:00:00'));
        $creneau8->setPlanning($planning1);
        $manager->persist($creneau8);

        $creneau9 = new Creneau();
        $creneau9->setNbPlaceMax(50);
        $creneau9->setNbPlaceRestante(24);
        $creneau9->setDate(new \DateTime('Tuesday, 21 September 2021 10:00:00'));
        $creneau9->setPlanning($planning1);
        $manager->persist($creneau9);

        $creneau10 = new Creneau();
        $creneau10->setNbPlaceMax(50);
        $creneau10->setNbPlaceRestante(6);
        $creneau10->setDate(new \DateTime('Tuesday, 21 September 2021 10:30:00'));
        $creneau10->setPlanning($planning1);
        $manager->persist($creneau10);

        $creneau11 = new Creneau();
        $creneau11->setNbPlaceMax(50);
        $creneau11->setNbPlaceRestante(4);
        $creneau11->setDate(new \DateTime('Tuesday, 21 September 2021 11:00:00'));
        $creneau11->setPlanning($planning1);
        $manager->persist($creneau11);

        $creneau12 = new Creneau();
        $creneau12->setNbPlaceMax(50);
        $creneau12->setNbPlaceRestante(24);
        $creneau12->setDate(new \DateTime('Tuesday, 21 September 2021 11:30:00'));
        $creneau12->setPlanning($planning1);
        $manager->persist($creneau12);

        $creneau13 = new Creneau();
        $creneau13->setNbPlaceMax(50);
        $creneau13->setNbPlaceRestante(0);
        $creneau13->setDate(new \DateTime('Tuesday, 21 September 2021 14:30:00'));
        $creneau13->setPlanning($planning1);
        $manager->persist($creneau13);

        $creneau14 = new Creneau();
        $creneau14->setNbPlaceMax(50);
        $creneau14->setNbPlaceRestante(32);
        $creneau14->setDate(new \DateTime('Tuesday, 21 September 2021 15:00:00'));
        $creneau14->setPlanning($planning1);
        $manager->persist($creneau14);

        $creneau15 = new Creneau();
        $creneau15->setNbPlaceMax(50);
        $creneau15->setNbPlaceRestante(2);
        $creneau15->setDate(new \DateTime('Tuesday, 21 September 2021 15:30:00'));
        $creneau15->setPlanning($planning1);
        $manager->persist($creneau15);

        $creneau16 = new Creneau();
        $creneau16->setNbPlaceMax(50);
        $creneau16->setNbPlaceRestante(15);
        $creneau16->setDate(new \DateTime('Tuesday, 21 September 2021 16:00:00'));
        $creneau16->setPlanning($planning1);
        $manager->persist($creneau16);

        $creneau17 = new Creneau();
        $creneau17->setNbPlaceMax(50);
        $creneau17->setNbPlaceRestante(0);
        $creneau17->setDate(new \DateTime('Wednesday, 22 September 2021 10:00:00'));
        $creneau17->setPlanning($planning1);
        $manager->persist($creneau17);

        $creneau18 = new Creneau();
        $creneau18->setNbPlaceMax(50);
        $creneau18->setNbPlaceRestante(24);
        $creneau18->setDate(new \DateTime('Wednesday, 22 September 2021 10:30:00'));
        $creneau18->setPlanning($planning1);
        $manager->persist($creneau18);

        $creneau19 = new Creneau();
        $creneau19->setNbPlaceMax(50);
        $creneau19->setNbPlaceRestante(6);
        $creneau19->setDate(new \DateTime('Wednesday, 22 September 2021 11:00:00'));
        $creneau19->setPlanning($planning1);
        $manager->persist($creneau19);

        $creneau20 = new Creneau();
        $creneau20->setNbPlaceMax(50);
        $creneau20->setNbPlaceRestante(4);
        $creneau20->setDate(new \DateTime('Wednesday, 22 September 2021 11:30:00'));
        $creneau20->setPlanning($planning1);
        $manager->persist($creneau20);

        $creneau21 = new Creneau();
        $creneau21->setNbPlaceMax(50);
        $creneau21->setNbPlaceRestante(24);
        $creneau21->setDate(new \DateTime('Wednesday, 22 September 2021 14:30:00'));
        $creneau21->setPlanning($planning1);
        $manager->persist($creneau21);

        $creneau22 = new Creneau();
        $creneau22->setNbPlaceMax(50);
        $creneau22->setNbPlaceRestante(0);
        $creneau22->setDate(new \DateTime('Wednesday, 22 September 2021 15:00:00'));
        $creneau22->setPlanning($planning1);
        $manager->persist($creneau22);

        $creneau23 = new Creneau();
        $creneau23->setNbPlaceMax(50);
        $creneau23->setNbPlaceRestante(32);
        $creneau23->setDate(new \DateTime('Wednesday, 21 September 2021 15:30:00'));
        $creneau23->setPlanning($planning1);
        $manager->persist($creneau23);

        $creneau24 = new Creneau();
        $creneau24->setNbPlaceMax(50);
        $creneau24->setNbPlaceRestante(2);
        $creneau24->setDate(new \DateTime('Wednesday, 21 September 2021 16:00:00'));
        $creneau24->setPlanning($planning1);
        $manager->persist($creneau24);

        $creneau25 = new Creneau();
        $creneau25->setNbPlaceMax(50);
        $creneau25->setNbPlaceRestante(15);
        $creneau25->setDate(new \DateTime('Thursday, 23 September 2021 10:00:00'));
        $creneau25->setPlanning($planning1);
        $manager->persist($creneau25);

        $creneau26 = new Creneau();
        $creneau26->setNbPlaceMax(50);
        $creneau26->setNbPlaceRestante(0);
        $creneau26->setDate(new \DateTime('Thursday, 23 September 2021 10:30:00'));
        $creneau26->setPlanning($planning1);
        $manager->persist($creneau26);

        $creneau27 = new Creneau();
        $creneau27->setNbPlaceMax(50);
        $creneau27->setNbPlaceRestante(24);
        $creneau27->setDate(new \DateTime('Thursday, 23 September 2021 11:00:00'));
        $creneau27->setPlanning($planning1);
        $manager->persist($creneau27);

        $creneau28 = new Creneau();
        $creneau28->setNbPlaceMax(50);
        $creneau28->setNbPlaceRestante(6);
        $creneau28->setDate(new \DateTime('Thursday, 23 September 2021 11:30:00'));
        $creneau28->setPlanning($planning1);
        $manager->persist($creneau28);

        $creneau29 = new Creneau();
        $creneau29->setNbPlaceMax(50);
        $creneau29->setNbPlaceRestante(4);
        $creneau29->setDate(new \DateTime('Thursday, 23 September 2021 14:30:00'));
        $creneau29->setPlanning($planning1);
        $manager->persist($creneau29);

        $creneau30 = new Creneau();
        $creneau30->setNbPlaceMax(50);
        $creneau30->setNbPlaceRestante(24);
        $creneau30->setDate(new \DateTime('Thursday, 23 September 2021 15:00:00'));
        $creneau30->setPlanning($planning1);
        $manager->persist($creneau30);

        $creneau31 = new Creneau();
        $creneau31->setNbPlaceMax(50);
        $creneau31->setNbPlaceRestante(0);
        $creneau31->setDate(new \DateTime('Thursday, 23 September 2021 15:30:00'));
        $creneau31->setPlanning($planning1);
        $manager->persist($creneau31);

        $creneau32 = new Creneau();
        $creneau32->setNbPlaceMax(50);
        $creneau32->setNbPlaceRestante(32);
        $creneau32->setDate(new \DateTime('Thursday, 23 September 2021 16:00:00'));
        $creneau32->setPlanning($planning1);
        $manager->persist($creneau32);

        $creneau33 = new Creneau();
        $creneau33->setNbPlaceMax(50);
        $creneau33->setNbPlaceRestante(2);
        $creneau33->setDate(new \DateTime('Friday, 24 September 2021 10:00:00'));
        $creneau33->setPlanning($planning1);
        $manager->persist($creneau33);

        $creneau34 = new Creneau();
        $creneau34->setNbPlaceMax(50);
        $creneau34->setNbPlaceRestante(15);
        $creneau34->setDate(new \DateTime('Friday, 24 September 2021 10:30:00'));
        $creneau34->setPlanning($planning1);
        $manager->persist($creneau34);

        $creneau35 = new Creneau();
        $creneau35->setNbPlaceMax(50);
        $creneau35->setNbPlaceRestante(0);
        $creneau35->setDate(new \DateTime('Friday, 24 September 2021 11:00:00'));
        $creneau35->setPlanning($planning1);
        $manager->persist($creneau35);

        $creneau36 = new Creneau();
        $creneau36->setNbPlaceMax(50);
        $creneau36->setNbPlaceRestante(24);
        $creneau36->setDate(new \DateTime('Friday, 24 September 2021 11:30:00'));
        $creneau36->setPlanning($planning1);
        $manager->persist($creneau36);

        $creneau37 = new Creneau();
        $creneau37->setNbPlaceMax(50);
        $creneau37->setNbPlaceRestante(0);
        $creneau37->setDate(new \DateTime('Friday, 24 September 2021 14:30:00'));
        $creneau37->setPlanning($planning1);
        $manager->persist($creneau37);

        $creneau38 = new Creneau();
        $creneau38->setNbPlaceMax(50);
        $creneau38->setNbPlaceRestante(24);
        $creneau38->setDate(new \DateTime('Friday, 24 September 2021 15:00:00'));
        $creneau38->setPlanning($planning1);
        $manager->persist($creneau38);

        $creneau39 = new Creneau();
        $creneau39->setNbPlaceMax(50);
        $creneau39->setNbPlaceRestante(0);
        $creneau39->setDate(new \DateTime('Friday, 24 September 2021 15:30:00'));
        $creneau39->setPlanning($planning1);
        $manager->persist($creneau39);

        $creneau40 = new Creneau();
        $creneau40->setNbPlaceMax(50);
        $creneau40->setNbPlaceRestante(32);
        $creneau40->setDate(new \DateTime('Friday, 24 September 2021 16:00:00'));
        $creneau40->setPlanning($planning1);
        $manager->persist($creneau40);

        $creneau41 = new Creneau();
        $creneau41->setNbPlaceMax(50);
        $creneau41->setNbPlaceRestante(2);
        $creneau41->setDate(new \DateTime('Saturday, 25 September 2021 10:00:00'));
        $creneau41->setPlanning($planning1);
        $manager->persist($creneau41);

        $creneau42 = new Creneau();
        $creneau42->setNbPlaceMax(50);
        $creneau42->setNbPlaceRestante(15);
        $creneau42->setDate(new \DateTime('Saturday, 25 September 2021 10:30:00'));
        $creneau42->setPlanning($planning1);
        $manager->persist($creneau42);

        $creneau43 = new Creneau();
        $creneau43->setNbPlaceMax(50);
        $creneau43->setNbPlaceRestante(0);
        $creneau43->setDate(new \DateTime('Saturday, 25 September 2021 11:00:00'));
        $creneau43->setPlanning($planning1);
        $manager->persist($creneau43);

        $creneau44 = new Creneau();
        $creneau44->setNbPlaceMax(50);
        $creneau44->setNbPlaceRestante(24);
        $creneau44->setDate(new \DateTime('Saturday, 25 September 2021 11:30:00'));
        $creneau44->setPlanning($planning1);
        $manager->persist($creneau44);

        $creneau45 = new Creneau();
        $creneau45->setNbPlaceMax(50);
        $creneau45->setNbPlaceRestante(0);
        $creneau45->setDate(new \DateTime('Saturday, 25 September 2021 14:30:00'));
        $creneau45->setPlanning($planning1);
        $manager->persist($creneau45);

        $creneau46 = new Creneau();
        $creneau46->setNbPlaceMax(50);
        $creneau46->setNbPlaceRestante(22);
        $creneau46->setDate(new \DateTime('Saturday, 25 September 2021 15:00:00'));
        $creneau46->setPlanning($planning1);
        $manager->persist($creneau46);

        $creneau47 = new Creneau();
        $creneau47->setNbPlaceMax(50);
        $creneau47->setNbPlaceRestante(0);
        $creneau47->setDate(new \DateTime('Saturday, 25 September 2021 15:30:00'));
        $creneau47->setPlanning($planning1);
        $manager->persist($creneau47);

        $creneau48 = new Creneau();
        $creneau48->setNbPlaceMax(50);
        $creneau48->setNbPlaceRestante(30);
        $creneau48->setDate(new \DateTime('Saturday, 25 September 2021 16:00:00'));
        $creneau48->setPlanning($planning1);
        $manager->persist($creneau48);


        //Tous les creneaux de bateau 2
        $creneau49 = new Creneau();
        $creneau49->setNbPlaceMax(40);
        $creneau49->setNbPlaceRestante(6);
        $creneau49->setDate(new \DateTime('Monday, 20 September 2021 10:00:00'));
        $creneau49->setPlanning($planning2);
        $manager->persist($creneau49);

        $creneau50 = new Creneau();
        $creneau50->setNbPlaceMax(40);
        $creneau50->setNbPlaceRestante(4);
        $creneau50->setDate(new \DateTime('Monday, 20 September 2021 10:30:00'));
        $creneau50->setPlanning($planning2);
        $manager->persist($creneau50);

        $creneau51 = new Creneau();
        $creneau51->setNbPlaceMax(40);
        $creneau51->setNbPlaceRestante(24);
        $creneau51->setDate(new \DateTime('Monday, 20 September 2021 11:00:00'));
        $creneau51->setPlanning($planning2);
        $manager->persist($creneau51);

        $creneau52 = new Creneau();
        $creneau52->setNbPlaceMax(40);
        $creneau52->setNbPlaceRestante(0);
        $creneau52->setDate(new \DateTime('Monday, 20 September 2021 11:30:00'));
        $creneau52->setPlanning($planning2);
        $manager->persist($creneau52);

        $creneau53 = new Creneau();
        $creneau53->setNbPlaceMax(40);
        $creneau53->setNbPlaceRestante(32);
        $creneau53->setDate(new \DateTime('Monday, 20 September 2021 14:30:00'));
        $creneau53->setPlanning($planning2);
        $manager->persist($creneau53);

        $creneau54 = new Creneau();
        $creneau54->setNbPlaceMax(40);
        $creneau54->setNbPlaceRestante(2);
        $creneau54->setDate(new \DateTime('Monday, 20 September 2021 15:00:00'));
        $creneau54->setPlanning($planning2);
        $manager->persist($creneau54);

        $creneau55 = new Creneau();
        $creneau55->setNbPlaceMax(40);
        $creneau55->setNbPlaceRestante(15);
        $creneau55->setDate(new \DateTime('Monday, 20 September 2021 15:30:00'));
        $creneau55->setPlanning($planning2);
        $manager->persist($creneau55);

        $creneau56 = new Creneau();
        $creneau56->setNbPlaceMax(40);
        $creneau56->setNbPlaceRestante(0);
        $creneau56->setDate(new \DateTime('Monday, 20 September 2021 16:00:00'));
        $creneau56->setPlanning($planning2);
        $manager->persist($creneau56);

        $creneau57 = new Creneau();
        $creneau57->setNbPlaceMax(40);
        $creneau57->setNbPlaceRestante(24);
        $creneau57->setDate(new \DateTime('Tuesday, 21 September 2021 10:00:00'));
        $creneau57->setPlanning($planning2);
        $manager->persist($creneau57);

        $creneau58 = new Creneau();
        $creneau58->setNbPlaceMax(40);
        $creneau58->setNbPlaceRestante(6);
        $creneau58->setDate(new \DateTime('Tuesday, 21 September 2021 10:30:00'));
        $creneau58->setPlanning($planning2);
        $manager->persist($creneau58);

        $creneau59 = new Creneau();
        $creneau59->setNbPlaceMax(40);
        $creneau59->setNbPlaceRestante(4);
        $creneau59->setDate(new \DateTime('Tuesday, 21 September 2021 11:00:00'));
        $creneau59->setPlanning($planning2);
        $manager->persist($creneau59);

        $creneau60 = new Creneau();
        $creneau60->setNbPlaceMax(40);
        $creneau60->setNbPlaceRestante(0);
        $creneau60->setDate(new \DateTime('Tuesday, 21 September 2021 11:30:00'));
        $creneau60->setPlanning($planning2);
        $manager->persist($creneau60);

        $creneau61 = new Creneau();
        $creneau61->setNbPlaceMax(40);
        $creneau61->setNbPlaceRestante(0);
        $creneau61->setDate(new \DateTime('Tuesday, 21 September 2021 14:30:00'));
        $creneau61->setPlanning($planning2);
        $manager->persist($creneau61);

        $creneau62 = new Creneau();
        $creneau62->setNbPlaceMax(40);
        $creneau62->setNbPlaceRestante(32);
        $creneau62->setDate(new \DateTime('Tuesday, 21 September 2021 15:00:00'));
        $creneau62->setPlanning($planning2);
        $manager->persist($creneau62);

        $creneau63 = new Creneau();
        $creneau63->setNbPlaceMax(40);
        $creneau63->setNbPlaceRestante(2);
        $creneau63->setDate(new \DateTime('Tuesday, 21 September 2021 15:30:00'));
        $creneau63->setPlanning($planning2);
        $manager->persist($creneau63);

        $creneau64 = new Creneau();
        $creneau64->setNbPlaceMax(40);
        $creneau64->setNbPlaceRestante(15);
        $creneau64->setDate(new \DateTime('Tuesday, 21 September 2021 16:00:00'));
        $creneau64->setPlanning($planning2);
        $manager->persist($creneau64);

        $creneau65 = new Creneau();
        $creneau65->setNbPlaceMax(40);
        $creneau65->setNbPlaceRestante(0);
        $creneau65->setDate(new \DateTime('Wednesday, 22 September 2021 10:00:00'));
        $creneau65->setPlanning($planning2);
        $manager->persist($creneau65);

        $creneau66 = new Creneau();
        $creneau66->setNbPlaceMax(40);
        $creneau66->setNbPlaceRestante(24);
        $creneau66->setDate(new \DateTime('Wednesday, 22 September 2021 10:30:00'));
        $creneau66->setPlanning($planning2);
        $manager->persist($creneau66);

        $creneau67 = new Creneau();
        $creneau67->setNbPlaceMax(40);
        $creneau67->setNbPlaceRestante(6);
        $creneau67->setDate(new \DateTime('Wednesday, 22 September 2021 11:00:00'));
        $creneau67->setPlanning($planning2);
        $manager->persist( $creneau67);

        $creneau68 = new Creneau();
        $creneau68->setNbPlaceMax(40);
        $creneau68->setNbPlaceRestante(4);
        $creneau68->setDate(new \DateTime('Wednesday, 22 September 2021 11:30:00'));
        $creneau68->setPlanning($planning2);
        $manager->persist($creneau68);

        $creneau69 = new Creneau();
        $creneau69->setNbPlaceMax(40);
        $creneau69->setNbPlaceRestante(24);
        $creneau69->setDate(new \DateTime('Wednesday, 22 September 2021 14:30:00'));
        $creneau69->setPlanning($planning2);
        $manager->persist($creneau69);

        $creneau70 = new Creneau();
        $creneau70->setNbPlaceMax(40);
        $creneau70->setNbPlaceRestante(0);
        $creneau70->setDate(new \DateTime('Wednesday, 22 September 2021 15:00:00'));
        $creneau70->setPlanning($planning2);
        $manager->persist($creneau70);

        $creneau71 = new Creneau();
        $creneau71->setNbPlaceMax(40);
        $creneau71->setNbPlaceRestante(32);
        $creneau71->setDate(new \DateTime('Wednesday, 21 September 2021 15:30:00'));
        $creneau71->setPlanning($planning2);
        $manager->persist($creneau71);

        $creneau72 = new Creneau();
        $creneau72->setNbPlaceMax(40);
        $creneau72->setNbPlaceRestante(0);
        $creneau72->setDate(new \DateTime('Wednesday, 21 September 2021 16:00:00'));
        $creneau72->setPlanning($planning2);
        $manager->persist($creneau72);

        $creneau73 = new Creneau();
        $creneau73->setNbPlaceMax(40);
        $creneau73->setNbPlaceRestante(15);
        $creneau73->setDate(new \DateTime('Thursday, 23 September 2021 10:00:00'));
        $creneau73->setPlanning($planning2);
        $manager->persist($creneau73);

        $creneau74 = new Creneau();
        $creneau74->setNbPlaceMax(40);
        $creneau74->setNbPlaceRestante(0);
        $creneau74->setDate(new \DateTime('Thursday, 23 September 2021 10:30:00'));
        $creneau74->setPlanning($planning2);
        $manager->persist($creneau74);

        $creneau75 = new Creneau();
        $creneau75->setNbPlaceMax(40);
        $creneau75->setNbPlaceRestante(24);
        $creneau75->setDate(new \DateTime('Thursday, 23 September 2021 11:00:00'));
        $creneau75->setPlanning($planning2);
        $manager->persist($creneau75);

        $creneau76 = new Creneau();
        $creneau76->setNbPlaceMax(40);
        $creneau76->setNbPlaceRestante(6);
        $creneau76->setDate(new \DateTime('Thursday, 23 September 2021 11:30:00'));
        $creneau76->setPlanning($planning2);
        $manager->persist($creneau76);

        $creneau77 = new Creneau();
        $creneau77->setNbPlaceMax(40);
        $creneau77->setNbPlaceRestante(4);
        $creneau77->setDate(new \DateTime('Thursday, 23 September 2021 14:30:00'));
        $creneau77->setPlanning($planning2);
        $manager->persist($creneau77);

        $creneau78 = new Creneau();
        $creneau78->setNbPlaceMax(40);
        $creneau78->setNbPlaceRestante(24);
        $creneau78->setDate(new \DateTime('Thursday, 23 September 2021 15:00:00'));
        $creneau78->setPlanning($planning2);
        $manager->persist($creneau78);

        $creneau79 = new Creneau();
        $creneau79->setNbPlaceMax(40);
        $creneau79->setNbPlaceRestante(0);
        $creneau79->setDate(new \DateTime('Thursday, 23 September 2021 15:30:00'));
        $creneau79->setPlanning($planning2);
        $manager->persist($creneau79);

        $creneau80 = new Creneau();
        $creneau80->setNbPlaceMax(40);
        $creneau80->setNbPlaceRestante(32);
        $creneau80->setDate(new \DateTime('Thursday, 23 September 2021 16:00:00'));
        $creneau80->setPlanning($planning2);
        $manager->persist($creneau80);

        $creneau81 = new Creneau();
        $creneau81->setNbPlaceMax(40);
        $creneau81->setNbPlaceRestante(2);
        $creneau81->setDate(new \DateTime('Friday, 24 September 2021 10:00:00'));
        $creneau81->setPlanning($planning2);
        $manager->persist($creneau81);

        $creneau82 = new Creneau();
        $creneau82->setNbPlaceMax(40);
        $creneau82->setNbPlaceRestante(15);
        $creneau82->setDate(new \DateTime('Friday, 24 September 2021 10:30:00'));
        $creneau82->setPlanning($planning2);
        $manager->persist($creneau82);

        $creneau83 = new Creneau();
        $creneau83->setNbPlaceMax(40);
        $creneau83->setNbPlaceRestante(0);
        $creneau83->setDate(new \DateTime('Friday, 24 September 2021 11:00:00'));
        $creneau83->setPlanning($planning2);
        $manager->persist($creneau83);

        $creneau84 = new Creneau();
        $creneau84->setNbPlaceMax(40);
        $creneau84->setNbPlaceRestante(24);
        $creneau84->setDate(new \DateTime('Friday, 24 September 2021 11:30:00'));
        $creneau84->setPlanning($planning2);
        $manager->persist($creneau84);

        $creneau85 = new Creneau();
        $creneau85->setNbPlaceMax(40);
        $creneau85->setNbPlaceRestante(4);
        $creneau85->setDate(new \DateTime('Friday, 24 September 2021 14:30:00'));
        $creneau85->setPlanning($planning2);
        $manager->persist($creneau85);

        $creneau86 = new Creneau();
        $creneau86->setNbPlaceMax(40);
        $creneau86->setNbPlaceRestante(24);
        $creneau86->setDate(new \DateTime('Friday, 24 September 2021 15:00:00'));
        $creneau86->setPlanning($planning2);
        $manager->persist($creneau86);

        $creneau87 = new Creneau();
        $creneau87->setNbPlaceMax(40);
        $creneau87->setNbPlaceRestante(0);
        $creneau87->setDate(new \DateTime('Friday, 24 September 2021 15:30:00'));
        $creneau87->setPlanning($planning2);
        $manager->persist($creneau87);

        $creneau88 = new Creneau();
        $creneau88->setNbPlaceMax(40);
        $creneau88->setNbPlaceRestante(32);
        $creneau88->setDate(new \DateTime('Friday, 24 September 2021 16:00:00'));
        $creneau88->setPlanning($planning2);
        $manager->persist($creneau88);

        $creneau89 = new Creneau();
        $creneau89->setNbPlaceMax(40);
        $creneau89->setNbPlaceRestante(2);
        $creneau89->setDate(new \DateTime('Saturday, 25 September 2021 10:00:00'));
        $creneau89->setPlanning($planning2);
        $manager->persist($creneau89);

        $creneau90 = new Creneau();
        $creneau90->setNbPlaceMax(40);
        $creneau90->setNbPlaceRestante(15);
        $creneau90->setDate(new \DateTime('Saturday, 25 September 2021 10:30:00'));
        $creneau90->setPlanning($planning2);
        $manager->persist($creneau90);

        $creneau91 = new Creneau();
        $creneau91->setNbPlaceMax(40);
        $creneau91->setNbPlaceRestante(0);
        $creneau91->setDate(new \DateTime('Saturday, 25 September 2021 11:00:00'));
        $creneau91->setPlanning($planning2);
        $manager->persist($creneau91);

        $creneau92 = new Creneau();
        $creneau92->setNbPlaceMax(40);
        $creneau92->setNbPlaceRestante(24);
        $creneau92->setDate(new \DateTime('Saturday, 25 September 2021 11:30:00'));
        $creneau92->setPlanning($planning2);
        $manager->persist($creneau92);

        $creneau93 = new Creneau();
        $creneau93->setNbPlaceMax(40);
        $creneau93->setNbPlaceRestante(4);
        $creneau93->setDate(new \DateTime('Saturday, 25 September 2021 14:30:00'));
        $creneau93->setPlanning($planning2);
        $manager->persist($creneau93);

        $creneau94 = new Creneau();
        $creneau94->setNbPlaceMax(40);
        $creneau94->setNbPlaceRestante(22);
        $creneau94->setDate(new \DateTime('Saturday, 25 September 2021 15:00:00'));
        $creneau94->setPlanning($planning2);
        $manager->persist($creneau94);

        $creneau95 = new Creneau();
        $creneau95->setNbPlaceMax(40);
        $creneau95->setNbPlaceRestante(0);
        $creneau95->setDate(new \DateTime('Saturday, 25 September 2021 15:30:00'));
        $creneau95->setPlanning($planning2);
        $manager->persist($creneau95);

        $creneau96 = new Creneau();
        $creneau96->setNbPlaceMax(40);
        $creneau96->setNbPlaceRestante(30);
        $creneau96->setDate(new \DateTime('Saturday, 25 September 2021 16:00:00'));
        $creneau96->setPlanning($planning2);
        $manager->persist($creneau96);


        //Tous les creneaux de bateau 3
        $creneau97 = new Creneau();
        $creneau97->setNbPlaceMax(30);
        $creneau97->setNbPlaceRestante(6);
        $creneau97->setDate(new \DateTime('Monday, 20 September 2021 10:00:00'));
        $creneau97->setPlanning($planning3);
        $manager->persist($creneau97);

        $creneau98 = new Creneau();
        $creneau98->setNbPlaceMax(50);
        $creneau98->setNbPlaceRestante(4);
        $creneau98->setDate(new \DateTime('Monday, 20 September 2021 10:30:00'));
        $creneau98->setPlanning($planning3);
        $manager->persist($creneau98);

        $creneau99 = new Creneau();
        $creneau99->setNbPlaceMax(50);
        $creneau99->setNbPlaceRestante(24);
        $creneau99->setDate(new \DateTime('Monday, 20 September 2021 11:00:00'));
        $creneau99->setPlanning($planning3);
        $manager->persist($creneau99);

        $creneau100 = new Creneau();
        $creneau100->setNbPlaceMax(50);
        $creneau100->setNbPlaceRestante(0);
        $creneau100->setDate(new \DateTime('Monday, 20 September 2021 11:30:00'));
        $creneau100->setPlanning($planning3);
        $manager->persist($creneau100);

        $creneau101 = new Creneau();
        $creneau101->setNbPlaceMax(50);
        $creneau101->setNbPlaceRestante(32);
        $creneau101->setDate(new \DateTime('Monday, 20 September 2021 14:30:00'));
        $creneau101->setPlanning($planning3);
        $manager->persist($creneau101);

        $creneau102 = new Creneau();
        $creneau102->setNbPlaceMax(50);
        $creneau102->setNbPlaceRestante(2);
        $creneau102->setDate(new \DateTime('Monday, 20 September 2021 15:00:00'));
        $creneau102->setPlanning($planning3);
        $manager->persist($creneau102);

        $creneau103 = new Creneau();
        $creneau103->setNbPlaceMax(50);
        $creneau103->setNbPlaceRestante(0);
        $creneau103->setDate(new \DateTime('Monday, 20 September 2021 15:30:00'));
        $creneau103->setPlanning($planning3);
        $manager->persist($creneau103);

        $creneau104 = new Creneau();
        $creneau104->setNbPlaceMax(50);
        $creneau104->setNbPlaceRestante(0);
        $creneau104->setDate(new \DateTime('Monday, 20 September 2021 16:00:00'));
        $creneau104->setPlanning($planning3);
        $manager->persist($creneau104);

        $creneau105 = new Creneau();
        $creneau105->setNbPlaceMax(50);
        $creneau105->setNbPlaceRestante(24);
        $creneau105->setDate(new \DateTime('Tuesday, 21 September 2021 10:00:00'));
        $creneau105->setPlanning($planning3);
        $manager->persist($creneau105);

        $creneau106 = new Creneau();
        $creneau106->setNbPlaceMax(50);
        $creneau106->setNbPlaceRestante(6);
        $creneau106->setDate(new \DateTime('Tuesday, 21 September 2021 10:30:00'));
        $creneau106->setPlanning($planning3);
        $manager->persist($creneau106);

        $creneau107 = new Creneau();
        $creneau107->setNbPlaceMax(50);
        $creneau107->setNbPlaceRestante(4);
        $creneau107->setDate(new \DateTime('Tuesday, 21 September 2021 11:00:00'));
        $creneau107->setPlanning($planning3);
        $manager->persist($creneau107);

        $creneau108 = new Creneau();
        $creneau108->setNbPlaceMax(50);
        $creneau108->setNbPlaceRestante(24);
        $creneau108->setDate(new \DateTime('Tuesday, 21 September 2021 11:30:00'));
        $creneau108->setPlanning($planning3);
        $manager->persist($creneau108);

        $creneau109 = new Creneau();
        $creneau109->setNbPlaceMax(50);
        $creneau109->setNbPlaceRestante(0);
        $creneau109->setDate(new \DateTime('Tuesday, 21 September 2021 14:30:00'));
        $creneau109->setPlanning($planning3);
        $manager->persist($creneau109);

        $creneau110 = new Creneau();
        $creneau110->setNbPlaceMax(50);
        $creneau110->setNbPlaceRestante(32);
        $creneau110->setDate(new \DateTime('Tuesday, 21 September 2021 15:00:00'));
        $creneau110->setPlanning($planning3);
        $manager->persist($creneau110);

        $creneau111 = new Creneau();
        $creneau111->setNbPlaceMax(50);
        $creneau111->setNbPlaceRestante(2);
        $creneau111->setDate(new \DateTime('Tuesday, 21 September 2021 15:30:00'));
        $creneau111->setPlanning($planning3);
        $manager->persist($creneau111);

        $creneau112 = new Creneau();
        $creneau112->setNbPlaceMax(50);
        $creneau112->setNbPlaceRestante(15);
        $creneau112->setDate(new \DateTime('Tuesday, 21 September 2021 16:00:00'));
        $creneau112->setPlanning($planning3);
        $manager->persist($creneau112);

        $creneau113 = new Creneau();
        $creneau113->setNbPlaceMax(50);
        $creneau113->setNbPlaceRestante(0);
        $creneau113->setDate(new \DateTime('Wednesday, 22 September 2021 10:00:00'));
        $creneau113->setPlanning($planning3);
        $manager->persist($creneau113);

        $creneau114 = new Creneau();
        $creneau114->setNbPlaceMax(50);
        $creneau114->setNbPlaceRestante(24);
        $creneau114->setDate(new \DateTime('Wednesday, 22 September 2021 10:30:00'));
        $creneau114->setPlanning($planning3);
        $manager->persist($creneau114);

        $creneau115 = new Creneau();
        $creneau115->setNbPlaceMax(50);
        $creneau115->setNbPlaceRestante(6);
        $creneau115->setDate(new \DateTime('Wednesday, 22 September 2021 11:00:00'));
        $creneau115->setPlanning($planning3);
        $manager->persist($creneau115);

        $creneau116 = new Creneau();
        $creneau116->setNbPlaceMax(50);
        $creneau116->setNbPlaceRestante(4);
        $creneau116->setDate(new \DateTime('Wednesday, 22 September 2021 11:30:00'));
        $creneau116->setPlanning($planning3);
        $manager->persist($creneau116);

        $creneau117 = new Creneau();
        $creneau117->setNbPlaceMax(50);
        $creneau117->setNbPlaceRestante(0);
        $creneau117->setDate(new \DateTime('Wednesday, 22 September 2021 14:30:00'));
        $creneau117->setPlanning($planning3);
        $manager->persist($creneau117);

        $creneau118 = new Creneau();
        $creneau118->setNbPlaceMax(50);
        $creneau118->setNbPlaceRestante(0);
        $creneau118->setDate(new \DateTime('Wednesday, 22 September 2021 15:00:00'));
        $creneau118->setPlanning($planning3);
        $manager->persist($creneau118);

        $creneau119 = new Creneau();
        $creneau119->setNbPlaceMax(50);
        $creneau119->setNbPlaceRestante(32);
        $creneau119->setDate(new \DateTime('Wednesday, 21 September 2021 15:30:00'));
        $creneau119->setPlanning($planning3);
        $manager->persist($creneau119);

        $creneau120 = new Creneau();
        $creneau120->setNbPlaceMax(50);
        $creneau120->setNbPlaceRestante(2);
        $creneau120->setDate(new \DateTime('Wednesday, 21 September 2021 16:00:00'));
        $creneau120->setPlanning($planning3);
        $manager->persist($creneau120);

        $creneau121 = new Creneau();
        $creneau121->setNbPlaceMax(50);
        $creneau121->setNbPlaceRestante(15);
        $creneau121->setDate(new \DateTime('Thursday, 23 September 2021 10:00:00'));
        $creneau121->setPlanning($planning3);
        $manager->persist($creneau121);

        $creneau122 = new Creneau();
        $creneau122->setNbPlaceMax(50);
        $creneau122->setNbPlaceRestante(0);
        $creneau122->setDate(new \DateTime('Thursday, 23 September 2021 10:30:00'));
        $creneau122->setPlanning($planning3);
        $manager->persist($creneau122);

        $creneau123 = new Creneau();
        $creneau123->setNbPlaceMax(50);
        $creneau123->setNbPlaceRestante(24);
        $creneau123->setDate(new \DateTime('Thursday, 23 September 2021 11:00:00'));
        $creneau123->setPlanning($planning3);
        $manager->persist($creneau123);

        $creneau124 = new Creneau();
        $creneau124->setNbPlaceMax(50);
        $creneau124->setNbPlaceRestante(6);
        $creneau124->setDate(new \DateTime('Thursday, 23 September 2021 11:30:00'));
        $creneau124->setPlanning($planning3);
        $manager->persist($creneau124);

        $creneau125 = new Creneau();
        $creneau125->setNbPlaceMax(50);
        $creneau125->setNbPlaceRestante(4);
        $creneau125->setDate(new \DateTime('Thursday, 23 September 2021 14:30:00'));
        $creneau125->setPlanning($planning3);
        $manager->persist($creneau125);

        $creneau126 = new Creneau();
        $creneau126->setNbPlaceMax(50);
        $creneau126->setNbPlaceRestante(24);
        $creneau126->setDate(new \DateTime('Thursday, 23 September 2021 15:00:00'));
        $creneau126->setPlanning($planning3);
        $manager->persist($creneau126);

        $creneau127 = new Creneau();
        $creneau127->setNbPlaceMax(50);
        $creneau127->setNbPlaceRestante(0);
        $creneau127->setDate(new \DateTime('Thursday, 23 September 2021 15:30:00'));
        $creneau127->setPlanning($planning3);
        $manager->persist($creneau127);

        $creneau128 = new Creneau();
        $creneau128->setNbPlaceMax(50);
        $creneau128->setNbPlaceRestante(32);
        $creneau128->setDate(new \DateTime('Thursday, 23 September 2021 16:00:00'));
        $creneau128->setPlanning($planning3);
        $manager->persist($creneau128);

        $creneau129 = new Creneau();
        $creneau129->setNbPlaceMax(50);
        $creneau129->setNbPlaceRestante(2);
        $creneau129->setDate(new \DateTime('Friday, 24 September 2021 10:00:00'));
        $creneau129->setPlanning($planning3);
        $manager->persist($creneau129);

        $creneau130 = new Creneau();
        $creneau130->setNbPlaceMax(50);
        $creneau130->setNbPlaceRestante(15);
        $creneau130->setDate(new \DateTime('Friday, 24 September 2021 10:30:00'));
        $creneau130->setPlanning($planning3);
        $manager->persist($creneau130);

        $creneau131 = new Creneau();
        $creneau131->setNbPlaceMax(50);
        $creneau131->setNbPlaceRestante(0);
        $creneau131->setDate(new \DateTime('Friday, 24 September 2021 11:00:00'));
        $creneau131->setPlanning($planning3);
        $manager->persist($creneau131);

        $creneau132 = new Creneau();
        $creneau132->setNbPlaceMax(50);
        $creneau132->setNbPlaceRestante(24);
        $creneau132->setDate(new \DateTime('Friday, 24 September 2021 11:30:00'));
        $creneau132->setPlanning($planning3);
        $manager->persist($creneau132);

        $creneau133 = new Creneau();
        $creneau133->setNbPlaceMax(50);
        $creneau133->setNbPlaceRestante(4);
        $creneau133->setDate(new \DateTime('Friday, 24 September 2021 14:30:00'));
        $creneau133->setPlanning($planning3);
        $manager->persist($creneau133);

        $creneau134 = new Creneau();
        $creneau134->setNbPlaceMax(50);
        $creneau134->setNbPlaceRestante(24);
        $creneau134->setDate(new \DateTime('Friday, 24 September 2021 15:00:00'));
        $creneau134->setPlanning($planning3);
        $manager->persist($creneau134);

        $creneau135 = new Creneau();
        $creneau135->setNbPlaceMax(50);
        $creneau135->setNbPlaceRestante(0);
        $creneau135->setDate(new \DateTime('Friday, 24 September 2021 15:30:00'));
        $creneau135->setPlanning($planning3);
        $manager->persist($creneau135);

        $creneau136 = new Creneau();
        $creneau136->setNbPlaceMax(50);
        $creneau136->setNbPlaceRestante(32);
        $creneau136->setDate(new \DateTime('Friday, 24 September 2021 16:00:00'));
        $creneau136->setPlanning($planning3);
        $manager->persist($creneau136);

        $creneau137 = new Creneau();
        $creneau137->setNbPlaceMax(50);
        $creneau137->setNbPlaceRestante(2);
        $creneau137->setDate(new \DateTime('Saturday, 25 September 2021 10:00:00'));
        $creneau137->setPlanning($planning3);
        $manager->persist($creneau137);

        $creneau138 = new Creneau();
        $creneau138->setNbPlaceMax(50);
        $creneau138->setNbPlaceRestante(15);
        $creneau138->setDate(new \DateTime('Saturday, 25 September 2021 10:30:00'));
        $creneau138->setPlanning($planning3);
        $manager->persist($creneau138);

        $creneau139 = new Creneau();
        $creneau139->setNbPlaceMax(50);
        $creneau139->setNbPlaceRestante(0);
        $creneau139->setDate(new \DateTime('Saturday, 25 September 2021 11:00:00'));
        $creneau139->setPlanning($planning3);
        $manager->persist($creneau139);

        $creneau140 = new Creneau();
        $creneau140->setNbPlaceMax(50);
        $creneau140->setNbPlaceRestante(24);
        $creneau140->setDate(new \DateTime('Saturday, 25 September 2021 11:30:00'));
        $creneau140->setPlanning($planning3);
        $manager->persist($creneau140);

        $creneau141 = new Creneau();
        $creneau141->setNbPlaceMax(50);
        $creneau141->setNbPlaceRestante(4);
        $creneau141->setDate(new \DateTime('Saturday, 25 September 2021 14:30:00'));
        $creneau141->setPlanning($planning3);
        $manager->persist($creneau141);

        $creneau142 = new Creneau();
        $creneau142->setNbPlaceMax(50);
        $creneau142->setNbPlaceRestante(22);
        $creneau142->setDate(new \DateTime('Saturday, 25 September 2021 15:00:00'));
        $creneau142->setPlanning($planning3);
        $manager->persist($creneau142);

        $creneau143 = new Creneau();
        $creneau143->setNbPlaceMax(50);
        $creneau143->setNbPlaceRestante(0);
        $creneau143->setDate(new \DateTime('Saturday, 25 September 2021 15:30:00'));
        $creneau143->setPlanning($planning3);
        $manager->persist($creneau143);

        $creneau144 = new Creneau();
        $creneau144->setNbPlaceMax(50);
        $creneau144->setNbPlaceRestante(30);
        $creneau144->setDate(new \DateTime('Saturday, 25 September 2021 16:00:00'));
        $creneau144->setPlanning($planning3);
        $manager->persist($creneau144);


        //Tous les creneaux de bateau 4
        $creneau145 = new Creneau();
        $creneau145->setNbPlaceMax(30);
        $creneau145->setNbPlaceRestante(6);
        $creneau145->setDate(new \DateTime('Monday, 20 September 2021 10:00:00'));
        $creneau145->setPlanning($planning4);
        $manager->persist($creneau145);

        $creneau146 = new Creneau();
        $creneau146->setNbPlaceMax(30);
        $creneau146->setNbPlaceRestante(4);
        $creneau146->setDate(new \DateTime('Monday, 20 September 2021 10:30:00'));
        $creneau146->setPlanning($planning4);
        $manager->persist($creneau146);

        $creneau147 = new Creneau();
        $creneau147->setNbPlaceMax(30);
        $creneau147->setNbPlaceRestante(24);
        $creneau147->setDate(new \DateTime('Monday, 20 September 2021 11:00:00'));
        $creneau147->setPlanning($planning4);
        $manager->persist($creneau147);

        $creneau148 = new Creneau();
        $creneau148->setNbPlaceMax(30);
        $creneau148->setNbPlaceRestante(0);
        $creneau148->setDate(new \DateTime('Monday, 20 September 2021 11:30:00'));
        $creneau148->setPlanning($planning4);
        $manager->persist($creneau148);

        $creneau149 = new Creneau();
        $creneau149->setNbPlaceMax(30);
        $creneau149->setNbPlaceRestante(22);
        $creneau149->setDate(new \DateTime('Monday, 20 September 2021 14:30:00'));
        $creneau149->setPlanning($planning4);
        $manager->persist($creneau149);

        $creneau150 = new Creneau();
        $creneau150->setNbPlaceMax(30);
        $creneau150->setNbPlaceRestante(2);
        $creneau150->setDate(new \DateTime('Monday, 20 September 2021 15:00:00'));
        $creneau150->setPlanning($planning4);
        $manager->persist($creneau150);

        $creneau151 = new Creneau();
        $creneau151->setNbPlaceMax(30);
        $creneau151->setNbPlaceRestante(15);
        $creneau151->setDate(new \DateTime('Monday, 20 September 2021 15:30:00'));
        $creneau151->setPlanning($planning4);
        $manager->persist($creneau151);

        $creneau152 = new Creneau();
        $creneau152->setNbPlaceMax(30);
        $creneau152->setNbPlaceRestante(0);
        $creneau152->setDate(new \DateTime('Monday, 20 September 2021 16:00:00'));
        $creneau152->setPlanning($planning4);
        $manager->persist($creneau152);

        $creneau153 = new Creneau();
        $creneau153->setNbPlaceMax(30);
        $creneau153->setNbPlaceRestante(24);
        $creneau153->setDate(new \DateTime('Tuesday, 21 September 2021 10:00:00'));
        $creneau153->setPlanning($planning4);
        $manager->persist($creneau153);

        $creneau154 = new Creneau();
        $creneau154->setNbPlaceMax(30);
        $creneau154->setNbPlaceRestante(6);
        $creneau154->setDate(new \DateTime('Tuesday, 21 September 2021 10:30:00'));
        $creneau154->setPlanning($planning4);
        $manager->persist($creneau154);

        $creneau155 = new Creneau();
        $creneau155->setNbPlaceMax(30);
        $creneau155->setNbPlaceRestante(4);
        $creneau155->setDate(new \DateTime('Tuesday, 21 September 2021 11:00:00'));
        $creneau155->setPlanning($planning4);
        $manager->persist($creneau155);

        $creneau156 = new Creneau();
        $creneau156->setNbPlaceMax(30);
        $creneau156->setNbPlaceRestante(24);
        $creneau156->setDate(new \DateTime('Tuesday, 21 September 2021 11:30:00'));
        $creneau156->setPlanning($planning4);
        $manager->persist($creneau156);

        $creneau157 = new Creneau();
        $creneau157->setNbPlaceMax(30);
        $creneau157->setNbPlaceRestante(0);
        $creneau157->setDate(new \DateTime('Tuesday, 21 September 2021 14:30:00'));
        $creneau157->setPlanning($planning4);
        $manager->persist($creneau157);

        $creneau158 = new Creneau();
        $creneau158->setNbPlaceMax(30);
        $creneau158->setNbPlaceRestante(12);
        $creneau158->setDate(new \DateTime('Tuesday, 21 September 2021 15:00:00'));
        $creneau158->setPlanning($planning4);
        $manager->persist($creneau158);

        $creneau159 = new Creneau();
        $creneau159->setNbPlaceMax(30);
        $creneau159->setNbPlaceRestante(2);
        $creneau159->setDate(new \DateTime('Tuesday, 21 September 2021 15:30:00'));
        $creneau159->setPlanning($planning4);
        $manager->persist($creneau159);

        $creneau160 = new Creneau();
        $creneau160->setNbPlaceMax(30);
        $creneau160->setNbPlaceRestante(15);
        $creneau160->setDate(new \DateTime('Tuesday, 21 September 2021 16:00:00'));
        $creneau160->setPlanning($planning4);
        $manager->persist($creneau160);

        $creneau161 = new Creneau();
        $creneau161->setNbPlaceMax(30);
        $creneau161->setNbPlaceRestante(0);
        $creneau161->setDate(new \DateTime('Wednesday, 22 September 2021 10:00:00'));
        $creneau161->setPlanning($planning4);
        $manager->persist($creneau161);

        $creneau162 = new Creneau();
        $creneau162->setNbPlaceMax(30);
        $creneau162->setNbPlaceRestante(24);
        $creneau162->setDate(new \DateTime('Wednesday, 22 September 2021 10:30:00'));
        $creneau162->setPlanning($planning4);
        $manager->persist($creneau162);

        $creneau163 = new Creneau();
        $creneau163->setNbPlaceMax(30);
        $creneau163->setNbPlaceRestante(6);
        $creneau163->setDate(new \DateTime('Wednesday, 22 September 2021 11:00:00'));
        $creneau163->setPlanning($planning4);
        $manager->persist($creneau163);

        $creneau164 = new Creneau();
        $creneau164->setNbPlaceMax(30);
        $creneau164->setNbPlaceRestante(4);
        $creneau164->setDate(new \DateTime('Wednesday, 22 September 2021 11:30:00'));
        $creneau164->setPlanning($planning4);
        $manager->persist($creneau164);

        $creneau165 = new Creneau();
        $creneau165->setNbPlaceMax(30);
        $creneau165->setNbPlaceRestante(24);
        $creneau165->setDate(new \DateTime('Wednesday, 22 September 2021 14:30:00'));
        $creneau165->setPlanning($planning4);
        $manager->persist($creneau165);

        $creneau166 = new Creneau();
        $creneau166->setNbPlaceMax(30);
        $creneau166->setNbPlaceRestante(0);
        $creneau166->setDate(new \DateTime('Wednesday, 22 September 2021 15:00:00'));
        $creneau166->setPlanning($planning4);
        $manager->persist($creneau166);

        $creneau167 = new Creneau();
        $creneau167->setNbPlaceMax(30);
        $creneau167->setNbPlaceRestante(2);
        $creneau167->setDate(new \DateTime('Wednesday, 21 September 2021 15:30:00'));
        $creneau167->setPlanning($planning4);
        $manager->persist($creneau167);

        $creneau168 = new Creneau();
        $creneau168->setNbPlaceMax(30);
        $creneau168->setNbPlaceRestante(2);
        $creneau168->setDate(new \DateTime('Wednesday, 21 September 2021 16:00:00'));
        $creneau168->setPlanning($planning4);
        $manager->persist($creneau168);

        $creneau169 = new Creneau();
        $creneau169->setNbPlaceMax(30);
        $creneau169->setNbPlaceRestante(15);
        $creneau169->setDate(new \DateTime('Thursday, 23 September 2021 10:00:00'));
        $creneau169->setPlanning($planning4);
        $manager->persist($creneau169);

        $creneau170 = new Creneau();
        $creneau170->setNbPlaceMax(30);
        $creneau170->setNbPlaceRestante(0);
        $creneau170->setDate(new \DateTime('Thursday, 23 September 2021 10:30:00'));
        $creneau170->setPlanning($planning4);
        $manager->persist($creneau170);

        $creneau171 = new Creneau();
        $creneau171->setNbPlaceMax(30);
        $creneau171->setNbPlaceRestante(24);
        $creneau171->setDate(new \DateTime('Thursday, 23 September 2021 11:00:00'));
        $creneau171->setPlanning($planning4);
        $manager->persist($creneau171);

        $creneau172 = new Creneau();
        $creneau172->setNbPlaceMax(30);
        $creneau172->setNbPlaceRestante(6);
        $creneau172->setDate(new \DateTime('Thursday, 23 September 2021 11:30:00'));
        $creneau172->setPlanning($planning4);
        $manager->persist($creneau172);

        $creneau173 = new Creneau();
        $creneau173->setNbPlaceMax(30);
        $creneau173->setNbPlaceRestante(4);
        $creneau173->setDate(new \DateTime('Thursday, 23 September 2021 14:30:00'));
        $creneau173->setPlanning($planning4);
        $manager->persist($creneau173);

        $creneau174 = new Creneau();
        $creneau174->setNbPlaceMax(30);
        $creneau174->setNbPlaceRestante(24);
        $creneau174->setDate(new \DateTime('Thursday, 23 September 2021 15:00:00'));
        $creneau174->setPlanning($planning4);
        $manager->persist($creneau174);

        $creneau175 = new Creneau();
        $creneau175->setNbPlaceMax(30);
        $creneau175->setNbPlaceRestante(0);
        $creneau175->setDate(new \DateTime('Thursday, 23 September 2021 15:30:00'));
        $creneau175->setPlanning($planning4);
        $manager->persist($creneau175);

        $creneau176 = new Creneau();
        $creneau176->setNbPlaceMax(30);
        $creneau176->setNbPlaceRestante(23);
        $creneau176->setDate(new \DateTime('Thursday, 23 September 2021 16:00:00'));
        $creneau176->setPlanning($planning4);
        $manager->persist($creneau176);

        $creneau177 = new Creneau();
        $creneau177->setNbPlaceMax(30);
        $creneau177->setNbPlaceRestante(2);
        $creneau177->setDate(new \DateTime('Friday, 24 September 2021 10:00:00'));
        $creneau177->setPlanning($planning4);
        $manager->persist($creneau177);

        $creneau178 = new Creneau();
        $creneau178->setNbPlaceMax(30);
        $creneau178->setNbPlaceRestante(15);
        $creneau178->setDate(new \DateTime('Friday, 24 September 2021 10:30:00'));
        $creneau178->setPlanning($planning4);
        $manager->persist($creneau178);

        $creneau179 = new Creneau();
        $creneau179->setNbPlaceMax(30);
        $creneau179->setNbPlaceRestante(0);
        $creneau179->setDate(new \DateTime('Friday, 24 September 2021 11:00:00'));
        $creneau179->setPlanning($planning4);
        $manager->persist($creneau179);

        $creneau180 = new Creneau();
        $creneau180->setNbPlaceMax(30);
        $creneau180->setNbPlaceRestante(24);
        $creneau180->setDate(new \DateTime('Friday, 24 September 2021 11:30:00'));
        $creneau180->setPlanning($planning4);
        $manager->persist($creneau180);

        $creneau181 = new Creneau();
        $creneau181->setNbPlaceMax(30);
        $creneau181->setNbPlaceRestante(4);
        $creneau181->setDate(new \DateTime('Friday, 24 September 2021 14:30:00'));
        $creneau181->setPlanning($planning4);
        $manager->persist($creneau181);

        $creneau182 = new Creneau();
        $creneau182->setNbPlaceMax(30);
        $creneau182->setNbPlaceRestante(24);
        $creneau182->setDate(new \DateTime('Friday, 24 September 2021 15:00:00'));
        $creneau182->setPlanning($planning4);
        $manager->persist($creneau182);

        $creneau183 = new Creneau();
        $creneau183->setNbPlaceMax(30);
        $creneau183->setNbPlaceRestante(0);
        $creneau183->setDate(new \DateTime('Friday, 24 September 2021 15:30:00'));
        $creneau183->setPlanning($planning4);
        $manager->persist($creneau183);

        $creneau184 = new Creneau();
        $creneau184->setNbPlaceMax(30);
        $creneau184->setNbPlaceRestante(18);
        $creneau184->setDate(new \DateTime('Friday, 24 September 2021 16:00:00'));
        $creneau184->setPlanning($planning4);
        $manager->persist($creneau184);

        $creneau185 = new Creneau();
        $creneau185->setNbPlaceMax(30);
        $creneau185->setNbPlaceRestante(0);
        $creneau185->setDate(new \DateTime('Saturday, 25 September 2021 10:00:00'));
        $creneau185->setPlanning($planning4);
        $manager->persist($creneau185);

        $creneau186 = new Creneau();
        $creneau186->setNbPlaceMax(30);
        $creneau186->setNbPlaceRestante(15);
        $creneau186->setDate(new \DateTime('Saturday, 25 September 2021 10:30:00'));
        $creneau186->setPlanning($planning4);
        $manager->persist($creneau186);

        $creneau187 = new Creneau();
        $creneau187->setNbPlaceMax(30);
        $creneau187->setNbPlaceRestante(0);
        $creneau187->setDate(new \DateTime('Saturday, 25 September 2021 11:00:00'));
        $creneau187->setPlanning($planning4);
        $manager->persist($creneau187);

        $creneau188 = new Creneau();
        $creneau188->setNbPlaceMax(30);
        $creneau188->setNbPlaceRestante(24);
        $creneau188->setDate(new \DateTime('Saturday, 25 September 2021 11:30:00'));
        $creneau188->setPlanning($planning4);
        $manager->persist($creneau188);

        $creneau189 = new Creneau();
        $creneau189->setNbPlaceMax(30);
        $creneau189->setNbPlaceRestante(4);
        $creneau189->setDate(new \DateTime('Saturday, 25 September 2021 14:30:00'));
        $creneau189->setPlanning($planning4);
        $manager->persist($creneau189);

        $creneau190 = new Creneau();
        $creneau190->setNbPlaceMax(30);
        $creneau190->setNbPlaceRestante(22);
        $creneau190->setDate(new \DateTime('Saturday, 25 September 2021 15:00:00'));
        $creneau190->setPlanning($planning4);
        $manager->persist($creneau190);

        $creneau191 = new Creneau();
        $creneau191->setNbPlaceMax(30);
        $creneau191->setNbPlaceRestante(0);
        $creneau191->setDate(new \DateTime('Saturday, 25 September 2021 15:30:00'));
        $creneau191->setPlanning($planning4);
        $manager->persist($creneau191);

        $creneau192 = new Creneau();
        $creneau192->setNbPlaceMax(30);
        $creneau192->setNbPlaceRestante(30);
        $creneau192->setDate(new \DateTime('Saturday, 25 September 2021 16:00:00'));
        $creneau192->setPlanning($planning4);
        $manager->persist($creneau192);


        $manager->flush();
    }
}