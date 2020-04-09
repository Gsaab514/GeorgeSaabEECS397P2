<?php
$var = $_POST['country'];;
$myfile = fopen("ListC.txt", "r") or die("Unable to open file!");;
$txt = ' ';
while(!  feof ($myfile)) {
       $txt =  fgets ($myfile);
 if( strcmp("Afghanistan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Afghanistan" Data/Countries/Afghanistan.data') ;
	 break; 
	}
 if( strcmp("Albania\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Albania" Data/Countries/Albania.data') ;
	 break; 
	}
 if( strcmp("Algeria\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Algeria" Data/Countries/Algeria.data') ;
	 break; 
	}
 if( strcmp("Andorra\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Andorra" Data/Countries/Andorra.data') ;
	 break; 
	}
 if( strcmp("Antigua and Barbuda\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Antigua and Barbuda" Data/Countries/Antigua\ and \Barbuda.data') ;
	 break; 
	}
 if( strcmp("Argentina\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Argentina" Data/Countries/Argentina.data') ;
	 break; 
	}
 if( strcmp("Armenia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Armenia" Data/Countries/Armenia.data') ;
	 break; 
	}
 if( strcmp("Aruba\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Aruba" Data/Countries/Aruba.data') ;
	 break; 
	}
 if( strcmp("Australia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Australia" Data/Countries/Australia.data') ;
	 break; 
	}
 if( strcmp("Austria\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Austria" Data/Countries/Austria.data') ;
	 break; 
	}
 if( strcmp("Azerbaijan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Azerbaijan" Data/Countries/Azerbaijan.data') ;
	 break; 
	}
 if( strcmp("Bahamas\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bahamas" Data/Countries/Bahamas.data') ;
	 break; 
	}
 if( strcmp("Bahrain\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bahrain" Data/Countries/Bahrain.data') ;
	 break; 
	}
 if( strcmp("Bangladesh\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bangladesh" Data/Countries/Bangladesh.data') ;
	 break; 
	}
 if( strcmp("Belarus\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Belarus" Data/Countries/Belarus.data') ;
	 break; 
	}
 if( strcmp("Belgium\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Belgium" Data/Countries/Belgium.data') ;
	 break; 
	}
 if( strcmp("Benin\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Benin" Data/Countries/Benin.data') ;
	 break; 
	}
 if( strcmp("Bhutan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bhutan" Data/Countries/Bhutan.data') ;
	 break; 
	}
 if( strcmp("Bolivia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bolivia" Data/Countries/Bolivia.data') ;
	 break; 
	}
 if( strcmp("Bosnia and Herzegovina\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bosnia and Herzegovina" Data/Countries/Bosnia\ and\ Herzegovina.data') ;
	 break; 
	}
 if( strcmp("Brazil\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Brazil" Data/Countries/Brazil.data') ;
	 break; 
	}
 if( strcmp("Brunei\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Brunei" Data/Countries/Brunei.data') ;
	 break; 
	}
 if( strcmp("Bulgaria\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Bulgaria" Data/Countries/Bulgaria.data') ;
	 break; 
	}
 if( strcmp("Burkina Faso\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Burkina Faso" Data/Countries/Burkina\ Faso.data') ;
	 break; 
	}
 if( strcmp("Cambodia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Cambodia" Data/Countries/Cambodia.data') ;
	 break; 
	}
 if( strcmp("Cameroon\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Cameroon" Data/Countries/Cameroon.data') ;
	 break; 
	}
 if( strcmp("Canada\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Canada" Data/Countries/Canada.data') ;
	 break; 
	}
 if( strcmp("Cayman Islands\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Cayman Islands" Data/Countries/Cayman\ Islands.data') ;
	 break; 
	}
 if( strcmp("Central African Republic\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Central African Republic" Data/Countries/Central\ African\ Republic.data') ;
	 break; 
	}
 if( strcmp("Chile\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Chile" Data/Countries/Chile.data') ;
	 break; 
	}
 if( strcmp("China\n",$var ) == 0){ 
	 system('awk -f plt.awk var="China" Data/Countries/China.data') ;
	 break; 
	}
 if( strcmp("Colombia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Colombia" Data/Countries/Colombia.data') ;
	 break; 
	}
 if( strcmp("Congo\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Congo" Data/Countries/Congo.data') ;
	 break; 
	}
 if( strcmp("Costa Rica\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Costa Rica" Data/Countries/Costa\ Rica.data') ;
	 break; 
	}
 if( strcmp("Croatia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Croatia" Data/Countries/Croatia.data') ;
	 break; 
	}
 if( strcmp("Cuba\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Cuba" Data/Countries/Cuba.data') ;
	 break; 
	}
 if( strcmp("Curacao\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Curacao" Data/Countries/Curacao.data') ;
	 break; 
	}
 if( strcmp("Cyprus\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Cyprus" Data/Countries/Cyprus.data') ;
	 break; 
	}
 if( strcmp("Czech Republic\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Czech Republic" Data/Countries/Czech\ Republic.data') ;
	 break; 
	}
 if( strcmp("Cote dIvoire\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Cote dIvoire" Data/Countries/Cote\ dIvoire.data') ;
	 break; 
	}
 if( strcmp("Democratic Republic of Congo\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Democratic Republic of Congo" Data/Countries/Democratic\ Republic\ of\ Congo.data') ;
	 break; 
	}
 if( strcmp("Denmark\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Denmark" Data/Countries/Denmark.data') ;
	 break; 
	}
 if( strcmp("Dominican Republic\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Dominican Republic" Data/Countries/Dominican\ Republic.data') ;
	 break; 
	}
 if( strcmp("Ecuador\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Ecuador" Data/Countries/Ecuador.data') ;
	 break; 
	}
 if( strcmp("Egypt\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Egypt" Data/Countries/Egypt.data') ;
	 break; 
	}
 if( strcmp("Equatorial Guinea\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Equatorial Guinea" Data/Countries/Equatorial\ Guinea.data') ;
	 break; 
	}
 if( strcmp("Estonia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Estonia" Data/Countries/Estonia.data') ;
	 break; 
	}
 if( strcmp("Swaziland\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Swaziland" Data/Countries/Swaziland.data') ;
	 break; 
	}
 if( strcmp("Ethiopia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Ethiopia" Data/Countries/Ethiopia.data') ;
	 break; 
	}
 if( strcmp("Faeroe Islands\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Faeroe Islands" Data/Countries/Faeroe\ Islands.data') ;
	 break; 
	}
 if( strcmp("Finland\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Finland" Data/Countries/Finland.data') ;
	 break; 
	}
 if( strcmp("France\n",$var ) == 0){ 
	 system('awk -f plt.awk var="France" Data/Countries/France.data') ;
	 break; 
	}
 if( strcmp("French Guiana\n",$var ) == 0){ 
	 system('awk -f plt.awk var="French Guiana" Data/Countries/French\ Guiana.data') ;
	 break; 
	}
 if( strcmp("French Polynesia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="French Polynesia" Data/Countries/French\ Polynesia.data') ;
	 break; 
	}
 if( strcmp("Gabon\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Gabon" Data/Countries/Gabon.data') ;
	 break; 
	}
 if( strcmp("Georgia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Georgia" Data/Countries/Georgia.data') ;
	 break; 
	}
 if( strcmp("Germany\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Germany" Data/Countries/Germany.data') ;
	 break; 
	}
 if( strcmp("Ghana\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Ghana" Data/Countries/Ghana.data') ;
	 break; 
	}
 if( strcmp("Gibraltar\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Gibraltar" Data/Countries/Gibraltar.data') ;
	 break; 
	}
 if( strcmp("Greece\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Greece" Data/Countries/Greece.data') ;
	 break; 
	}
 if( strcmp("Guadeloupe\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Guadeloupe" Data/Countries/Guadeloupe.data') ;
	 break; 
	}
 if( strcmp("Guam\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Guam" Data/Countries/Guam.data') ;
	 break; 
	}
 if( strcmp("Guatemala\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Guatemala" Data/Countries/Guatemala.data') ;
	 break; 
	}
 if( strcmp("Guernsey\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Guernsey" Data/Countries/Guernsey.data') ;
	 break; 
	}
 if( strcmp("Guinea\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Guinea" Data/Countries/Guinea.data') ;
	 break; 
	}
 if( strcmp("Guyana\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Guyana" Data/Countries/Guyana.data') ;
	 break; 
	}
 if( strcmp("Vatican\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Vatican" Data/Countries/Vatican.data') ;
	 break; 
	}
 if( strcmp("Honduras\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Honduras" Data/Countries/Honduras.data') ;
	 break; 
	}
 if( strcmp("Hungary\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Hungary" Data/Countries/Hungary.data') ;
	 break; 
	}
 if( strcmp("Iceland\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Iceland" Data/Countries/Iceland.data') ;
	 break; 
	}
 if( strcmp("India\n",$var ) == 0){ 
	 system('awk -f plt.awk var="India" Data/Countries/India.data') ;
	 break; 
	}
 if( strcmp("Indonesia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Indonesia" Data/Countries/Indonesia.data') ;
	 break; 
	}
 if( strcmp("International\n",$var ) == 0){ 
	 system('awk -f plt.awk var="International" Data/Countries/International.data') ;
	 break; 
	}
 if( strcmp("Iran\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Iran" Data/Countries/Iran.data') ;
	 break; 
	}
 if( strcmp("Iraq\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Iraq" Data/Countries/Iraq.data') ;
	 break; 
	}
 if( strcmp("Ireland\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Ireland" Data/Countries/Ireland.data') ;
	 break; 
	}
 if( strcmp("Israel\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Israel" Data/Countries/Israel.data') ;
	 break; 
	}
 if( strcmp("Italy\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Italy" Data/Countries/Italy.data') ;
	 break; 
	}
 if( strcmp("Jamaica\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Jamaica" Data/Countries/Jamaica.data') ;
	 break; 
	}
 if( strcmp("Japan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Japan" Data/Countries/Japan.data') ;
	 break; 
	}
 if( strcmp("Jersey\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Jersey" Data/Countries/Jersey.data') ;
	 break; 
	}
 if( strcmp("Jordan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Jordan" Data/Countries/Jordan.data') ;
	 break; 
	}
 if( strcmp("Kazakhstan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Kazakhstan" Data/Countries/Kazakhstan.data') ;
	 break; 
	}
 if( strcmp("Kenya\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Kenya" Data/Countries/Kenya.data') ;
	 break; 
	}
 if( strcmp("Kuwait\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Kuwait" Data/Countries/Kuwait.data') ;
	 break; 
	}
 if( strcmp("Latvia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Latvia" Data/Countries/Latvia.data') ;
	 break; 
	}
 if( strcmp("Lebanon\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Lebanon" Data/Countries/Lebanon.data') ;
	 break; 
	}
 if( strcmp("Liberia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Liberia" Data/Countries/Liberia.data') ;
	 break; 
	}
 if( strcmp("Liechtenstein\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Liechtenstein" Data/Countries/Liechtenstein.data') ;
	 break; 
	}
 if( strcmp("Lithuania\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Lithuania" Data/Countries/Lithuania.data') ;
	 break; 
	}
 if( strcmp("Luxembourg\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Luxembourg" Data/Countries/Luxembourg.data') ;
	 break; 
	}
 if( strcmp("Malaysia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Malaysia" Data/Countries/Malaysia.data') ;
	 break; 
	}
 if( strcmp("Maldives\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Maldives" Data/Countries/Maldives.data') ;
	 break; 
	}
 if( strcmp("Malta\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Malta" Data/Countries/Malta.data') ;
	 break; 
	}
 if( strcmp("Martinique\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Martinique" Data/Countries/Martinique.data') ;
	 break; 
	}
 if( strcmp("Mauritania\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Mauritania" Data/Countries/Mauritania.data') ;
	 break; 
	}
 if( strcmp("Mayotte\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Mayotte" Data/Countries/Mayotte.data') ;
	 break; 
	}
 if( strcmp("Mexico\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Mexico" Data/Countries/Mexico.data') ;
	 break; 
	}
 if( strcmp("Monaco\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Monaco" Data/Countries/Monaco.data') ;
	 break; 
	}
 if( strcmp("Mongolia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Mongolia" Data/Countries/Mongolia.data') ;
	 break; 
	}
 if( strcmp("Morocco\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Morocco" Data/Countries/Morocco.data') ;
	 break; 
	}
 if( strcmp("Namibia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Namibia" Data/Countries/Namibia.data') ;
	 break; 
	}
 if( strcmp("Nepal\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Nepal" Data/Countries/Nepal.data') ;
	 break; 
	}
 if( strcmp("Netherlands\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Netherlands" Data/Countries/Netherlands.data') ;
	 break; 
	}
 if( strcmp("New Zealand\n",$var ) == 0){ 
	 system('awk -f plt.awk var="New Zealand" Data/Countries/New\ Zealand.data') ;
	 break; 
	}
 if( strcmp("Nigeria\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Nigeria" Data/Countries/Nigeria.data') ;
	 break; 
	}
 if( strcmp("Macedonia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Macedonia" Data/Countries/Macedonia.data') ;
	 break; 
	}
 if( strcmp("Norway\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Norway" Data/Countries/Norway.data') ;
	 break; 
	}
 if( strcmp("Palestine\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Palestine" Data/Countries/Palestine.data') ;
	 break; 
	}
 if( strcmp("Oman\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Oman" Data/Countries/Oman.data') ;
	 break; 
	}
 if( strcmp("Pakistan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Pakistan" Data/Countries/Pakistan.data') ;
	 break; 
	}
 if( strcmp("Panama\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Panama" Data/Countries/Panama.data') ;
	 break; 
	}
 if( strcmp("Paraguay\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Paraguay" Data/Countries/Paraguay.data') ;
	 break; 
	}
 if( strcmp("Peru\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Peru" Data/Countries/Peru.data') ;
	 break; 
	}
 if( strcmp("Philippines\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Philippines" Data/Countries/Philippines.data') ;
	 break; 
	}
 if( strcmp("Poland\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Poland" Data/Countries/Poland.data') ;
	 break; 
	}
 if( strcmp("Portugal\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Portugal" Data/Countries/Portugal.data') ;
	 break; 
	}
 if( strcmp("Puerto Rico\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Puerto Rico" Data/Countries/Puerto\ Rico.data') ;
	 break; 
	}
 if( strcmp("Qatar\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Qatar" Data/Countries/Qatar.data') ;
	 break; 
	}
 if( strcmp("South Korea\n",$var ) == 0){ 
	 system('awk -f plt.awk var="South Korea" Data/Countries/South\ Korea.data') ;
	 break; 
	}
 if( strcmp("Moldova\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Moldova" Data/Countries/Moldova.data') ;
	 break; 
	}
 if( strcmp("Romania\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Romania" Data/Countries/Romania.data') ;
	 break; 
	}
 if( strcmp("Russia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Russia" Data/Countries/Russia.data') ;
	 break; 
	}
 if( strcmp("Rwanda\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Rwanda" Data/Countries/Rwanda.data') ;
	 break; 
	}
 if( strcmp("Reunion\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Reunion" Data/Countries/Reunion.data') ;
	 break; 
	}
 if( strcmp("Saint Barthlemy\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Saint Barthlemy" Data/Countries/Saint\ Barthlemy.data') ;
	 break; 
	}
 if( strcmp("Saint Lucia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Saint Lucia" Data/Countries/Saint\ Lucia.data') ;
	 break; 
	}
 if( strcmp("Saint Martin (French part)\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Saint Martin (French part)" Data/Countries/Saint\ Martin\ (French\ part).data') ;
	 break; 
	}
 if( strcmp("Saint Vincent and the Grenadines\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Saint Vincent and the Grenadines" Data/Countries/Saint\ Vincent\ and\ the\ Grenadines.data') ;
	 break; 
	}
 if( strcmp("San Marino\n",$var ) == 0){ 
	 system('awk -f plt.awk var="San Marino" Data/Countries/San\ Marino.data') ;
	 break; 
	}
 if( strcmp("Saudi Arabia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Saudi Arabia" Data/Countries/Saudi\ Arabia.data') ;
	 break; 
	}
 if( strcmp("Senegal\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Senegal" Data/Countries/Senegal.data') ;
	 break; 
	}
 if( strcmp("Serbia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Serbia" Data/Countries/Serbia.data') ;
	 break; 
	}
 if( strcmp("Seychelles\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Seychelles" Data/Countries/Seychelles.data') ;
	 break; 
	}
 if( strcmp("Singapore\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Singapore" Data/Countries/Singapore.data') ;
	 break; 
	}
 if( strcmp("Slovakia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Slovakia" Data/Countries/Slovakia.data') ;
	 break; 
	}
 if( strcmp("Slovenia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Slovenia" Data/Countries/Slovenia.data') ;
	 break; 
	}
 if( strcmp("Somalia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Somalia" Data/Countries/Somalia.data') ;
	 break; 
	}
 if( strcmp("South Africa\n",$var ) == 0){ 
	 system('awk -f plt.awk var="South Africa" Data/Countries/South\ Africa.data') ;
	 break; 
	}
 if( strcmp("Spain\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Spain" Data/Countries/Spain.data') ;
	 break; 
	}
 if( strcmp("Sri Lanka\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Sri Lanka" Data/Countries/Sri\ Lanka.data') ;
	 break; 
	}
 if( strcmp("Sudan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Sudan" Data/Countries/Sudan.data') ;
	 break; 
	}
 if( strcmp("Suriname\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Suriname" Data/Countries/Suriname.data') ;
	 break; 
	}
 if( strcmp("Sweden\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Sweden" Data/Countries/Sweden.data') ;
	 break; 
	}
 if( strcmp("Switzerland\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Switzerland" Data/Countries/Switzerland.data') ;
	 break; 
	}
 if( strcmp("Thailand\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Thailand" Data/Countries/Thailand.data') ;
	 break; 
	}
 if( strcmp("United Kingdom\n",$var ) == 0){ 
	 system('awk -f plt.awk var="United Kingdom" Data/Countries/United\ Kingdom.data') ;
	 break; 
	}
 if( strcmp("Togo\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Togo" Data/Countries/Togo.data') ;
	 break; 
	}
 if( strcmp("Trinidad and Tobago\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Trinidad and Tobago" Data/Countries/Trinidad\ and\ Tobago.data') ;
	 break; 
	}
 if( strcmp("Tunisia\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Tunisia" Data/Countries/Tunisia.data') ;
	 break; 
	}
 if( strcmp("Turkey\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Turkey" Data/Countries/Turkey.data') ;
	 break; 
	}
 if( strcmp("Ukraine\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Ukraine" Data/Countries/Ukraine.data') ;
	 break; 
	}
 if( strcmp("United Arab Emirates\n",$var ) == 0){ 
	 system('awk -f plt.awk var="United Arab Emirates" Data/Countries/United\ Arab\ Emirates.data') ;
	 break; 
	}
 if( strcmp("Tanzania\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Tanzania" Data/Countries/Tanzania.data') ;
	 break; 
	}
 if( strcmp("United States Virgin Islands\n",$var ) == 0){ 
	 system('awk -f plt.awk var="United States Virgin Islands" Data/Countries/United\ States\ Virgin\ Islands.data') ;
	 break; 
	}
 if( strcmp("United States\n",$var ) == 0){ 
	 system('awk -f plt.awk var="United States" Data/Countries/United\ States.data') ;
	 break; 
	}
 if( strcmp("Uruguay\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Uruguay" Data/Countries/Uruguay.data') ;
	 break; 
	}
 if( strcmp("Uzbekistan\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Uzbekistan" Data/Countries/Uzbekistan.data') ;
	 break; 
	}
 if( strcmp("Venezuela\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Venezuela" Data/Countries/Venezuela.data') ;
	 break; 
	}
 if( strcmp("Vietnam\n",$var ) == 0){ 
	 system('awk -f plt.awk var="Vietnam" Data/Countries/Vietnam.data') ;
	 break; 
	}
 if( strcmp("World\n",$var ) == 0){ 
	 system('awk -f plt.awk var="World" Data/Countries/World.data') ;
	 break; 
	}
}
fclose($myfile);
?>
