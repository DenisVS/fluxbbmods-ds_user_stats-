<?php
################################################################################
#                           P H P - W E B - S T A T                            #
################################################################################
# This file is part of php-web-stat.                                           #
# Open-Source Statistic Software for Webmasters                                #
# Script-Version:     3.6.x                                                    #
# File-Release-Date:  07/09/17                                                 #
# Official web site and latest version:    http://www.php-web-statistik.de     #
#==============================================================================#
# Authors: Reimar Hoven, Holger Naves                                          #
# Copyright � 2008 by PHP-Web-Stat - All Rights Reserved.                      #
################################################################################
# Very big thanks to Selvi Armutcu                                             #
################################################################################

// array for all country codes
$country_array = array (

"a1"   => "Anonymous Proxy",
"a2"   => "Satellite Provider",
"ac"   => "Ascension Island",
"ad"   => "Andorra",
"ae"   => "United Arab Emirates",
"af"   => "Afghanistan",
"ag"   => "Antigua and Barbuda",
"ai"   => "Anguilla",
"al"   => "Albania",
"am"   => "Armenia",
"an"   => "Netherlands Antilles",
"ao"   => "Angola",
"aq"   => "Antarctica",
"ar"   => "Argentina",
"as"   => "American Samoa",
"at"   => "Austria",
"au"   => "Australia",
"aw"   => "Aruba",
"az"   => "Azerbaijan",
"ba"   => "Bosnia and Herzegovina",
"bb"   => "Barbados",
"bd"   => "Bangladesh",
"be"   => "Belgium",
"bf"   => "Burkina Faso",
"bg"   => "Bulgaria",
"bh"   => "Bahrain",
"bi"   => "Burundi",
"bj"   => "Benin",
"bm"   => "Bermuda",
"bn"   => "Brunei Darussalam",
"bo"   => "Bolivia",
"br"   => "Brazil",
"bs"   => "Bahamas",
"bt"   => "Bhutan",
"bv"   => "Bouvet Island",
"bw"   => "Botswana",
"by"   => "Belarus",
"bz"   => "Belize",
"ca"   => "Canada",
"cc"   => "Cocos Keeling Islands",
"cd"   => "Democratic Republic Congo",
"cf"   => "Central African Republic",
"cg"   => "Republic Congo",
"ch"   => "Switzerland",
"ci"   => "Cote d'Ivoire",
"ck"   => "Cook Islands",
"cl"   => "Chile",
"cm"   => "Cameroon",
"cn"   => "China",
"co"   => "Colombia",
"cr"   => "Costa Rica",
"cs"   => "Serbia and Montenegro",
"cu"   => "Cuba",
"cv"   => "Cap Verde",
"cx"   => "Christmas Island",
"cy"   => "Cyprus",
"cz"   => "Czech Republic",
"de"   => "Germany",
"dj"   => "Djibouti",
"dk"   => "Denmark",
"dm"   => "Dominica",
"do"   => "Dominican Republic",
"dz"   => "Algeria",
"ec"   => "Ecuador",
"ee"   => "Estonia",
"eg"   => "Egypt",
"eh"   => "Western Sahara",
"er"   => "Eritrea",
"es"   => "Spain",
"et"   => "Ethiopia",
"eu"   => "European Union",
"fi"   => "Finland",
"fj"   => "Fiji",
"fk"   => "Falkland Islands Malvina",
"fm"   => "Federal State of Micronesia",
"fo"   => "Faroe Islands",
"fr"   => "France",
"ga"   => "Gabon",
"gb"   => "Great Britain",
"gd"   => "Grenada",
"ge"   => "Georgia",
"gf"   => "French Guiana",
"gg"   => "Guernsey",
"gh"   => "Ghana",
"gi"   => "Gibraltar",
"gl"   => "Greenland",
"gm"   => "Gambia",
"gn"   => "Guinea",
"gp"   => "Guadeloupe",
"gq"   => "Equatorial Guinea",
"gr"   => "Greece",
"gs"   => "South Georgia and the South Sandwich Islands",
"gt"   => "Guatemala",
"gu"   => "Guam",
"gw"   => "Guinea Bissau",
"gy"   => "Guyana",
"hk"   => "Hong Kong",
"hm"   => "Heard and McDonald Islands",
"hn"   => "Honduras",
"hr"   => "Croatia/Hrvatska",
"ht"   => "Haiti",
"hu"   => "Hungary",
"id"   => "Indonesia",
"ie"   => "Ireland",
"il"   => "Israel",
"im"   => "Isle of Man",
"in"   => "India",
"io"   => "British Indian Ocean Territory",
"iq"   => "Iraq",
"ir"   => "Iran",
"is"   => "Iceland",
"it"   => "Italy",
"je"   => "Jersey",
"jm"   => "Jamaica",
"jo"   => "Jordan",
"jp"   => "Japan",
"ke"   => "Kenya",
"kg"   => "Kyrgyzstan",
"kh"   => "Cambodia",
"ki"   => "Kiribati",
"km"   => "Comoros",
"kn"   => "Saint Kitts and Nevis",
"kp"   => "Korea, Democratic People's Republic",
"kr"   => "Korea",
"kw"   => "Kuwait",
"ky"   => "Cayman Islands",
"kz"   => "Kazakhstan",
"la"   => "Lao People's Democratic Republic",
"lb"   => "Lebanon",
"lc"   => "Saint Lucia",
"li"   => "Liechtenstein",
"lk"   => "Sri Lanka",
"lr"   => "Liberia",
"ls"   => "Lesotho",
"lt"   => "Lithuania",
"lu"   => "Luxembourg",
"lv"   => "Latvia",
"ly"   => "Libyan Arab Jamahiriya",
"ma"   => "Morocco",
"mc"   => "Monaco",
"md"   => "Republic of Moldova",
"me"   => "Mexico",
"mg"   => "Madagascar",
"mh"   => "Marshall Islands",
"mk"   => "Macedonia, Former Yugoslav Republic",
"ml"   => "Mali",
"mm"   => "Myanmar",
"mn"   => "Mongolia",
"mo"   => "Macau",
"mp"   => "Northern Mariana Islands",
"mq"   => "Martinique",
"mr"   => "Mauritania",
"ms"   => "Montserrat",
"mt"   => "Malta",
"mu"   => "Mauritius",
"mv"   => "Maldives",
"mw"   => "Malawi",
"mx"   => "Mexico",
"my"   => "Malaysia",
"mz"   => "Mozambique",
"na"   => "Namibia",
"nc"   => "New Caledonia",
"ne"   => "Niger",
"nf"   => "Norfolk Island",
"ng"   => "Nigeria",
"ni"   => "Nicaragua",
"nl"   => "Netherlands",
"no"   => "Norway",
"np"   => "Nepal",
"nr"   => "Nauru",
"nu"   => "Niue",
"nz"   => "New Zealand",
"om"   => "Oman",
"pa"   => "Panama",
"pe"   => "Peru",
"pf"   => "French Polynesia",
"pg"   => "Papua New Guinea",
"ph"   => "Philippines",
"pk"   => "Pakistan",
"pl"   => "Poland",
"pm"   => "St Pierre and Miquelon",
"pn"   => "Pitcairn Island",
"pr"   => "Puerto Rico",
"ps"   => "Palestinian Territories",
"pt"   => "Portugal",
"pw"   => "Palau",
"py"   => "Paraguay",
"qa"   => "Qatar",
"re"   => "Reunion Island",
"ro"   => "Romania",
"rs"   => "Republic of Serbia",
"ru"   => "Russian Federation",
"rw"   => "Rwanda",
"sa"   => "Saudi Arabia",
"sb"   => "Solomon Islands",
"sc"   => "Seychelles",
"sd"   => "Sudan",
"se"   => "Sweden",
"sg"   => "Singapore",
"sh"   => "St Helena",
"si"   => "Slovenia",
"sj"   => "Svalbard and Jan Mayen Islands",
"sk"   => "Slovak Republic",
"sl"   => "Sierra Leone",
"sm"   => "San Marino",
"sn"   => "Senegal",
"so"   => "Somalia",
"sr"   => "Suriname",
"st"   => "Sao Tome and Principe",
"sv"   => "El Salvador",
"sy"   => "Syrian Arab Republic",
"sz"   => "Swaziland",
"tc"   => "Turks and Caicos Islands",
"td"   => "Chad",
"tf"   => "French Southern Territories",
"tg"   => "Togo",
"th"   => "Thailand",
"tj"   => "Tajikistan",
"tk"   => "Tokelau",
"tm"   => "Turkmenistan",
"tn"   => "Tunisia",
"to"   => "Tonga",
"tp"   => "East Timor",
"tr"   => "Turkey",
"tt"   => "Trinidad and Tobago",
"tv"   => "Tuvalu",
"tw"   => "Taiwan",
"tz"   => "Tanzania",
"ua"   => "Ukraine",
"ug"   => "Uganda",
"uk"   => "United Kingdom",
"um"   => "US Minor Outlying Islands",
"us"   => "United States",
"uy"   => "Uruguay",
"uz"   => "Uzbekistan",
"va"   => "Vatican State",
"vc"   => "Saint Vincent and the Grenadines",
"ve"   => "Venezuela",
"vg"   => "Virgin Islands British",
"vi"   => "Virgin Islands USA",
"vn"   => "Vietnam",
"vu"   => "Vanuatu",
"wf"   => "Wallis and Futuna Islands",
"ws"   => "Western Samoa",
"ye"   => "Yemen",
"yt"   => "Mayotte",
"yu"   => "Yugoslavia",
"za"   => "South Africa",
"zm"   => "Zambia",
"zw"   => "Zimbabwe",
"aero" => "Aviation",
"biz"  => "Business",
"coop" => "Co-Operative Organisation",
"info" => "Info",
"int"  => "Intern.Organisation",
"name" => "Homepage",
"com"  => "Commercial",
"net"  => "Network",
"org"  => "Organisation",
"edu"  => "US University",
"gov"  => "US Government",
"mil"  => "US Army"

);
?>