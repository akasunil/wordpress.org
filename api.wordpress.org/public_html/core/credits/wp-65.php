<?php

class WP_65_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matt'                => [ 'Matt Mullenweg', 'Release Lead' ],
					'akshayar'            => [ 'Akshaya Rane', 'Release Lead' ],
					'priethor'            => [ 'Héctor Prieto', 'Release Lead' ],
					'marybaum'            => [ 'Mary Baum', 'Release Lead' ],
					'davidbaumwald'       => 'David Baumwald',
					'swissspidy'          => 'Pascal Birchler',
					'get_dave'            => 'David Smith',
					'youknowriad'         => 'Riad Benguella',
					'chaion07'            => 'Ahmed Chaion',
					'audrasjb'            => 'Jean-Baptiste Audras',
					'rajinsharwar'        => 'Rajin Sharwar',
					'annezazu'            => 'Anne McCarthy',
					'fabiankaegy'         => 'Fabian Kägy',
					'Benjamin_Zekavica'   => 'Benjamin Zekavica',
					'richtabor'           => 'Rich Tabor',
					'dansoschin'          => 'Dan Soschin',
					'laurlittle'          => 'Lauren Stein',
					'estelaris'           => 'Estela Rueda',
					'leonnugraha'         => 'Leonardus Nugraha',
					'stevenlinx'          => 'Steven Lin',
					'joemcgill'           => 'Joe McGill',
					'mukesh27'            => 'Mukesh Panchal',
					'oglekler'            => 'Olga Gleckler',
					'lumiblog'            => 'Patrick Lumumba',
					'vipuljnext'          => 'Vipul Ghori',
					'poena'               => 'Carolina Nymark',
					'SergeyBiryukov'      => 'Sergey Biryukov',
					'Mamaduka'            => 'George Mamadashvili',
					'wildworks'           => 'Aki Hamano',
					'ellatrix'            => 'Ella van Durpe',
					'oandregal'           => 'André Maneiro',
					'gziolo'              => 'Greg Ziółkowski',
					'ntsekouras'          => 'Nik Tsekouras',
					'ramonopoly'          => 'Ramon James',
					'afercia'             => 'Andrea Fercia',
					'mmaattiiaass'        => 'Matias Benedetto',
					'hellofromTonya'      => 'Tonya Mork',
					'desrosj'             => 'Jonathan Desrosiers',
					'afragen'             => 'Andy Fragen',
					'pbiron'              => 'Paul Biron',
					'costdev'             => 'Colin Stewart',
					'peterwilsoncc'       => 'Peter Wilson',
					'luisherranz'         => 'Luis Herranz',
					'santosguillamot'     => 'Mario Santos',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'jorgefilipecosta'    => 'Jorge Costa',
					'andrewserong'        => 'Andrew Serong',
					'jorbin'              => 'Aaron Jorbin',
					'dmsnell'             => 'Dennis Snell',
					'isabel_brison'       => 'Isabel Brison',
					'jameskoster'         => 'James Koster',
					'cbravobernal'        => 'Carlos Bravo',
					'jonsurrell'          => 'Jon Surrell',
					'joedolson'           => 'Joe Dolson',
					'sabernhardt'         => 'Stephen Bernhardt',
					'Bernhard Reiter'     => 'Bernhard Reiter',
					'mciampini'           => 'Marco Ciampini',
					'James Roberts'       => 'James Roberts',
					'shailu25'            => 'Shail Mehta',
					'huzaifaalmesbah'     => 'Huzaifa Al Mesbah',
					'matveb'              => 'Matias Ventura',
 					'Joen'                => 'Joen Asmussen',
					'saxonfletcher'       => 'Saxon Fletcher',
					'darerodz'            => 'David Arenas',
					'jffng'               => 'Jeff Ong',
					'mikachan'            => 'Sarah Norris',
					'pbking'              => 'Jason Crist',
					'grantmkin'           => 'Grant M. Kinney',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'254volkan',
			'_ck_',
			'aaronrobertshaw',
			'abletec',
			'abmamun007',
			'acosmin',
			'adampickering',
			'adamsilverstein',
			'adarshposimyth',
			'adrianduffell',
			'afercia',
			'afragen',
			'ahoereth',
			'ajithrn',
			'ajlende',
			'ajmcfadyen',
			'akirk',
			'akmelias',
			'akshayar',
			'alanfuller',
			'alexanderkoledov',
			'alexandrebuffet',
			'alexkingorg',
			'alexstine',
			'alh0319',
			'amieiro',
			'amykamala',
			'anandau14',
			'andbalashov',
			'andraganescu',
			'andrewhayward',
			'andrewleap',
			'andrewserong',
			'aneeshd16',
			'ankit-k-gupta',
			'ankitmaru',
			'anlino',
			'annezazu',
			'ant1busted',
			'antonisme',
			'antonlukin',
			'antonvlasenko',
			'antpb',
			'apeatling',
			'arena94',
			'aristath',
			'artemiosans',
			'arthur791004',
			'ashfame',
			'ashikur698',
			'aslamdoctor',
			'atachibana',
			'atimmer',
			'audrasjb',
			'audunmb',
			'aurooba',
			'axwax',
			'ayeshrajans',
			'azaozz',
			'bacoords',
			'bahia0019',
			'balub',
			'bangank36',
			'barry',
			'barryhughes-1',
			'bartkalisz',
			'bartkleinreesink',
			'batmoo',
			'beafialho',
			'beaulebens',
			'bedas',
			'benharri',
			'benjamin_zekavica',
			'benjamingosset',
			'benjaminknox',
			'benlk',
			'benniledl',
			'benoitchantre',
			'benoitfouc',
			'bernhard-reiter',
			'beryldlg',
			'bgardner',
			'bgnicolepaschen',
			'billseymour',
			'bjorsch',
			'blobaugh',
			'bobbingwide',
			'boemedia',
			'boogah',
			'boonebgorges',
			'born2webdesign',
			'bosskhj',
			'bph',
			'bplv',
			'bradparbs',
			'brianhenryie',
			'britner',
			'brookemk',
			'buley',
			'burnuser',
			'cadic',
			'cafenoirdesign',
			'carlosgprim',
			'cbirdsong',
			'cbravobernal',
			'cdevroe',
			'celloexpressions',
			'cenkdemir',
			'cfinnberg',
			'chaion07',
			'chanthaboune',
			'chasedsiedu',
			'chaton666',
			'cheffheid',
			'chesio',
			'chouby',
			'chriscct7',
			'chrisdavidmiles',
			'christopherplus',
			'chrystl',
			'clorith',
			'codepo8',
			'codex-m',
			'coffee2code',
			'colind',
			'colomet',
			'colorful-tones',
			'cookiesfordevo',
			'coolmann',
			'coreyw',
			'costdev',
			'courane01',
			'creativeslice',
			'crstauf',
			'cu121',
			'cvorko',
			'cwhitmore',
			'cyberchicken',
			'cybr',
			'czapla',
			'danielbachhuber',
			'danieldudzic',
			'danieltj',
			'dansoschin',
			'darerodz',
			'dargus',
			'darshitrajyaguru97',
			'darssen',
			'dartiss',
			'davecpage',
			'davidbaumwald',
			'davidbinda',
			'davidperez',
			'dd32',
			'denis-de-bernardy',
			'dennysdionigi',
			'derekblank',
			'derekspringer',
			'dernin',
			'designsimply',
			'desrosj',
			'desrosjbot',
			'devmuhib',
			'devsahadat',
			'dextorlobo',
			'dglingren',
			'dharm1025',
			'dhrumilk',
			'dhrupo',
			'dhruvishah2203',
			'didierjm',
			'dilipbheda',
			'dingo_d',
			'dionysous',
			'djpaul',
			'dlh',
			'dlocc',
			'dmsnell',
			'dougal',
			'dpcalhoun',
			'drewapicture',
			'drrobotnik',
			'dsas',
			'duck_',
			'eboxnet',
			'ecc',
			'ecgan',
			'ehtis',
			'ellatrix',
			'elrae',
			'emirpprime',
			'endymion00',
			'engahmeds3ed',
			'enwikuna',
			'ericlewis',
			'estelaris',
			'ethitter',
			'euthelup',
			'evanltd',
			'fabiankaegy',
			'fabiorubioglio',
			'faguni22',
			'faisal03',
			'faisalahammad',
			'faisalahmed29',
			'fanly',
			'feastdesignco',
			'felipeelia',
			'fgiannar',
			'fierevere',
			'filosofo',
			'fischfood',
			'fitehal',
			'flhz',
			'flixos90',
			'flootr',
			'fnpen',
			'fotodrachen',
			'francescocarlucci',
			'francina',
			'freewebmentor',
			'fullofcaffeine',
			'fushar',
			'gaambo',
			'gajendrasingh',
			'ganon',
			'garibiza',
			'gavande1',
			'georgestephanis',
			'gerardreches',
			'geriux',
			'get_dave',
			'girishpanchal',
			'giuseppemazzapica-1',
			'glendaviesnz',
			'goldenapples',
			'gonzomir',
			'grantmkin',
			'greenshady',
			'gregbenz',
			'griffinjt',
			'gvgvgvijayan',
			'gziolo',
			'h71',
			'halounsbury',
			'hanneslsm',
			'hardik2221',
			'hareesh-pillai',
			'harsh175',
			'harshgajipara',
			'hasanuzzamanshamim',
			'hbhalodia',
			'helen',
			'helgatheviking',
			'hellofromtonya',
			'hellosatya',
			'hifidesign',
			'hiteshtalpada',
			'hlashbrooke',
			'howdy_mcgee',
			'hrithikd',
			'hrrarya',
			'hrshahin',
			'hugod',
			'husobj',
			'huubl',
			'huzaifaalmesbah',
			'hztyfoon',
			'iamarunchaitanyajami',
			'iamasadpolash',
			'iamtakashi',
			'ianbelanger',
			'iandunn',
			'icaleb',
			'idad5',
			'ideag',
			'igmoweb',
			'ignatiusjeroe',
			'inc2734',
			'introvertedbot',
			'ironprogrammer',
			'isabel_brison',
			'iseulde',
			'itecrs',
			'itpathsolutions',
			'itschristiandale',
			'ivanzhuck',
			'jacobcassidy',
			'jadpm',
			'jamescollins',
			'jameskoster',
			'jamieblomerus',
			'jane',
			'janthiel',
			'japh',
			'jarednova',
			'jason_the_adams',
			'javiercasares',
			'jayadevankbh',
			'jazzs3quence',
			'jb510',
			'jbobich',
			'jbrinley',
			'jdy68',
			'jeffpaul',
			'jeherve',
			'jeremyfelt',
			'jeryj',
			'jffng',
			'jghazally',
			'jipmoors',
			'jivygraphics',
			'jltallon',
			'joanrodas',
			'joedolson',
			'joefusco',
			'joehoyle',
			'joelcj91',
			'joemcgill',
			'joen',
			'johnbillion',
			'johnciacia',
			'johnjamesjacoby',
			'jonsurrell',
			'joppuyo',
			'jorbin',
			'jordesign',
			'jorgefilipecosta',
			'jorgevilchez',
			'jornp',
			'joshcanhelp',
			'joshuatf',
			'joyously',
			'jrf',
			'jrtashjian',
			'jsandtro',
			'jsmoriss',
			'jsnajdr',
			'jsnjohnston',
			'juanfra',
			'juanmaguitar',
			'juhise',
			'justlevine',
			'kadamwhite',
			'kafleg',
			'kamranzafar4343',
			'karinclimber',
			'karl94',
			'karlijnbk',
			'karmatosed',
			'karolmanijak',
			'kawsaralameven',
			'kbat82',
			'kdowns',
			'kebbet',
			'kevin940726',
			'kevincoleman',
			'kevinwhoffman',
			'kharisblank',
			'khokansardar',
			'kim88',
			'kirasong',
			'kishanjasani',
			'kitchin',
			'kjellr',
			'kkmuffme',
			'knutsp',
			'koen12344',
			'koesper',
			'kraftbj',
			'kraftner',
			'krupajnanda',
			'krupalpanchal',
			'ktaron',
			'kurtpayne',
			'kurudrive',
			'kushang78',
			'l1nuxjedi',
			'lada7042',
			'lakshmananphp',
			'laumindproductscomau',
			'laurlittle',
			'lgladdy',
			'liammcarthur',
			'lighthouse79',
			'liviopv',
			'lkraav',
			'logikal16',
			'looswebstudio',
			'lots0logs',
			'lpawlik',
			'luboslives',
			'lucasbustamante',
			'luisherranz',
			'lukefiretoss',
			'lumiblog',
			'luminuu',
			'maahrokh',
			'maartenbelmans',
			'macmanx',
			'madhudollu',
			'madtownlems',
			'mahnewr',
			'malae',
			'mamaduka',
			'man4toman',
			'manfcarlo',
			'manooweb',
			'manyourisms',
			'mapumba',
			'marc_j',
			'marcoevich',
			'margolisj',
			'markhowellsmead',
			'markjaquith',
			'markoheijnen',
			'markoserb',
			'martinkrcho',
			'marybaum',
			'masteradhoc',
			'mathewemoore',
			'matiasrecondo77',
			'matt',
			'matteoenna',
			'matveb',
			'maxpertici',
			'mayur8991',
			'mbijon',
			'mciampini',
			'mcsf',
			'megane9988',
			'megphillips91',
			'meher',
			'mel_cha',
			'melcarthus',
			'melchoyce',
			'meta4',
			'metropolis_john',
			'mhimon',
			'mhshohel',
			'michalooki',
			'miguelsansegundo',
			'miikkamakela',
			'mikachan',
			'mikejolley',
			'mikeschinkel',
			'mikeschroder',
			'mikinc860',
			'mimitips',
			'mkismy',
			'mmaattiiaass',
			'mnydigital',
			'mohonchandra',
			'monzuralam',
			'mordauk',
			'morehawes',
			'mrdollu',
			'mreishus',
			'mrwweb',
			'mshowes',
			'mte90',
			'muhme',
			'mujuonly',
			'mukesh27',
			'munizleo',
			'mzaweb',
			'nacin',
			'nahidkhanseo',
			'naoki0h',
			'narenin',
			'nareshbheda',
			'nateallen',
			'navjotjsingh',
			'ndiego',
			'neffff',
			'neilorangepeel',
			'nekojonez',
			'nendeb55',
			'nerdpressteam',
			'nerrad',
			'nestea29950',
			'netweb',
			'nexflaszlo',
			'nhrrob',
			'nickpagz',
			'nico23',
			'nicolefurlan',
			'nidhidhandhukiya',
			'nielslange',
			'nihar007',
			'nikmeyer',
			'nilovelez',
			'niravsherasiya7707',
			'nithi22',
			'nithins53',
			'nko',
			'noahtallen',
			'noisysocks',
			'norcross',
			'nosilver4u',
			'ntsekouras',
			'nudge',
			'nuhel',
			'nvwd',
			'nwjames',
			'oandregal',
			'obenland',
			'obliviousharmony',
			'ocean90',
			'ockham',
			'oglekler',
			'oguzkocer',
			'okat',
			'olegfuture',
			'onemaggie',
			'otto42',
			'paaljoachim',
			'pablohoneyhoney',
			'pacicio',
			'panchalhimani711',
			'pannelars',
			'partyfrikadelle',
			'passoniate',
			'patricia70',
			'pauldewouters',
			'paulkevan',
			'pavelevap',
			'pbaylies',
			'pbearne',
			'pbiron',
			'pbking',
			'pento',
			'perrelet',
			'peterwilsoncc',
			'petitphp',
			'philipp15b',
			'phillsav',
			'pitamdey',
			'pmbaldha',
			'pmeenan',
			'poena',
			'pogidude',
			'pooja1210',
			'pooja9712',
			'poran766',
			'pouicpouic',
			'pratiklondhe',
			'pratikthink',
			'presskopp',
			'presstoke',
			'priethor',
			'prionkor',
			'provenself',
			'psykro',
			'rabmalin',
			'rafiq91',
			'rahmohn',
			'rajinsharwar',
			'ramonopoly',
			'rashiguptaa',
			'ratneshsonar',
			'ravanh',
			'rawrly',
			'rcain',
			'rcorrales',
			'rcreators',
			'rdcoll',
			'rebasaurus',
			'renathoc',
			'renehermi',
			'retlehs',
			'retrofox',
			'richtabor',
			'rishishah',
			'rmccue',
			'room34',
			'roytanck',
			'rsiddharth',
			'rudlinkon',
			'ryan',
			'ryelle',
			'ryokuhi',
			'sabbirshouvo',
			'sabernhardt',
			'sabreuse',
			'sacerro',
			'sachyya-sachet',
			'sadizaman',
			'sadpencil',
			'sakibsnaz',
			'salcode',
			'samba45',
			'samuelsidler',
			'santosguillamot',
			'sarathar',
			'satishprajapati',
			'saxonafletcher',
			'sayful',
			'sc0ttkclark',
			'schlessera',
			'schutzsmith',
			'scribu',
			'scruffian',
			'sean212',
			'sebastienserre',
			'sereedmedia',
			'sergeybiryukov',
			'sessioncookiemonster',
			'seusmaniqbal',
			'sgr33n',
			'shaampk1',
			'shahariaazam',
			'shailu25',
			'shanef',
			'shaunandrews',
			'shidouhikari',
			'shimotomoki',
			'shiponkarmakar',
			'shireling',
			'shooper',
			'shreyash3087',
			'shubhamsedani',
			'siobhyb',
			'sirajummahdi',
			'sjregan',
			'skithund',
			'skyakash12',
			'smrubenstein',
			'smub',
			'soean',
			'soulseekah',
			'spacedmonkey',
			'spaceshipone',
			'sparklingrobots',
			'sruthi89',
			'stacimc',
			'starbuck',
			'stephencronin',
			'stephenh1988',
			'stevejonesdev',
			'stevenlinx',
			'strarsis',
			'subrataemfluence',
			'sumisubedi',
			'sumitbagthariya16',
			'sumitsingh',
			'sunil25393',
			'svitlana41319',
			'swissspidy',
			'syamraj24',
			'synchro',
			'tabrisrp',
			'tadamarketing',
			'talldanwp',
			'tanjimtc71',
			'taylorde',
			'taylorgorman',
			'tazotodua',
			'tejwanihemant',
			'tellyworth',
			'thakordarshil',
			'thekt12',
			'thelovekesh',
			'themes-1',
			'thinkluke',
			'threadi',
			'timbroddin',
			'timothyblynjacobs',
			'tjnowell',
			'tmatsuur',
			'tnolte',
			'tobiasbg',
			'tobifjellner',
			'tohincoderex',
			'tollmanz',
			'tomjcafferkey',
			'tomluckies',
			'tomsommer',
			'tomxygen',
			'tomybyte',
			'toro_unit',
			'torres126',
			'toru',
			'toscho',
			'tropicalista',
			'truptikanzariya',
			'tykoted',
			'tyrannous',
			'tyxla',
			'ubernaut',
			'ugyensupport',
			'ukdrahul',
			'up1512001',
			'upadalavipul',
			'utsav72640',
			'valendesigns',
			'valerogarte',
			'vcanales',
			'verygoode',
			'vikram6',
			'viliamkopecky',
			'viper007bond',
			'vipuljnext',
			'viralsampat',
			'virtality-marketing-solutions',
			'vivekawsm',
			'vladimiraus',
			'voboghure',
			'vortfu',
			'vrajadas',
			'wasiur195',
			'wazeter',
			'webcommsat',
			'webdevmattcrom',
			'webtechpooja',
			'welaunchio',
			'welcher',
			'westi',
			'westonruter',
			'whiteshadow',
			'whsajid',
			'wido',
			'wildworks',
			'williamsba1',
			'wonderboymusic',
			'wpcorner',
			'wpfed',
			'wpfy',
			'wplmillet',
			'wpscholar',
			'wpsmith',
			'xknown',
			'xlthlx',
			'yansern',
			'yguyon',
			'youknowriad',
			'yuliyan',
			'yuvrajsinh2211',
			'zaguiini',
			'zanematthew',
			'zebaafiashama',
			'zieladam',
			'zodiac1978',
			'zunaid321',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'https://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'clipboard.js', 'https://clipboardjs.com/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'https://www.getid3.org/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'https://github.com/briancherne/jquery-hoverIntent' ],
			[ 'imgAreaSelect', 'https://github.com/odyniec/imgareaselect' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'https://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'https://github.com/furf/jquery-ui-touch-punch' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'https://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'https://www.mediaelementjs.com/' ],
			[ 'Moment', 'https://momentjs.com/' ],
			[ 'PclZip', 'https://www.phpconcept.net/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'https://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'https://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'https://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'https://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'https://code.google.com/archive/p/php-ixr/' ],
			[ 'Thickbox', 'https://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'https://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}

