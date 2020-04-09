<!DOCTYPE html>
<html>
<head>
<title>PHP!</title>
</head>
<body>
<p> 
<?php


$myfile = fopen("./Data/tag.txt", "r") or die("Unable to open read test_file file!");;
$period = '86400' ;			// 24 hours refresh rate
$filemtime = @filemtime($myfile); 	// see if the file exists
if( $filemtime ){
        $fileT = time() - $filemtime ;  // get the time when the was accessed
        echo "\nFile time = $fileT";
        if( ($fileT  > $period) ){      // if the file is more than 24 hours refresh data
        	echo "$filename was more than  24Hours " ;
		fclose($myfile);
		exec('touch ./Data/tag.txt'); // mark the time the data was refreshed
		$myfile = fopen("https://covid.ourworldindata.org/data/ecdc/full_data.csv", "r") or die("Unable to open write file!");
		$outfile = fopen("./Data/testfile.txt", "w") or die("Unable to open write file!");
		$txt = ' ';
		$last = ' ';
		while(!  feof ($myfile)) {  // chage ' ' to _ and delete '
  			$last = $txt;
  			$txt =  fgetc ($myfile);
  			if( $txt == ' ' && $last != ',' )
  				fwrite($outfile, "_");
  			else
	  			if( $txt != '\'')
  					fwrite($outfile, $txt);
		};
		fclose($myfile);
		fclose($outfile);
		/* 
		 * Execute awk script to sparate data by countries
		 *   for each country data, the script stores the data
		 *   in a file name CountryName.data the path to the file
		 *   is ./Data/Countries/
		 */
		exec('awk -f Data/scrpt.awk var="World" Data/testfile.txt');
	}else{  			// file does not need to be refreshed
        	echo "$filename was less than  24Hours " ;
	}
}

?>

	
	<center>
<label for="country">Choose a Country:</label>
<form method="POST">
<select name="country">
	<option selected disabled>-- select --</option>
	<option value="Afghanistan">Afghanistan</option>
	<option value="Albania">Albania</option>
	<option value="Algeria">Algeria</option>
	<option value="Andorra">Andorra</option>
	<option value="Angola">Angola</option>
	<option value="Anguilla">Anguilla</option>
	<option value="Antigua_and_Barbuda">Antigua_and_Barbuda</option>
	<option value="Argentina">Argentina</option>
	<option value="Armenia">Armenia</option>
	<option value="Aruba">Aruba</option>
	<option value="Australia">Australia</option>
	<option value="Austria">Austria</option>
	<option value="Azerbaijan">Azerbaijan</option>
	<option value="Bahamas">Bahamas</option>
	<option value="Bahrain">Bahrain</option>
	<option value="Bangladesh">Bangladesh</option>
	<option value="Barbados">Barbados</option>
	<option value="Belarus">Belarus</option>
	<option value="Belgium">Belgium</option>
	<option value="Belize">Belize</option>
	<option value="Benin">Benin</option>
	<option value="Bermuda">Bermuda</option>
	<option value="Bhutan">Bhutan</option>
	<option value="Bolivia">Bolivia</option>
	<option value="Bonaire_Sint_Eustatius_and_Saba">Bonaire_Sint_Eustatius_and_Saba</option>
	<option value="Bosnia_and_Herzegovina">Bosnia_and_Herzegovina</option>
	<option value="Botswana">Botswana</option>
	<option value="Brazil">Brazil</option>
	<option value="British_Virgin_Islands">British_Virgin_Islands</option>
	<option value="Brunei">Brunei</option>
	<option value="Bulgaria">Bulgaria</option>
	<option value="Burkina_Faso">Burkina_Faso</option>
	<option value="Burundi">Burundi</option>
	<option value="Cambodia">Cambodia</option>
	<option value="Cameroon">Cameroon</option>
	<option value="Canada">Canada</option>
	<option value="Cape_Verde">Cape_Verde</option>
	<option value="Cayman_Islands">Cayman_Islands</option>
	<option value="Central_African_Republic">Central_African_Republic</option>
	<option value="Chad">Chad</option>
	<option value="Chile">Chile</option>
	<option value="China">China</option>
	<option value="Colombia">Colombia</option>
	<option value="Congo">Congo</option>
	<option value="Costa_Rica">Costa_Rica</option>
	<option value="Cote_dIvoire">Cote_dIvoire</option>
	<option value="Croatia">Croatia</option>
	<option value="Cuba">Cuba</option>
	<option value="Curacao">Curacao</option>
	<option value="Cyprus">Cyprus</option>
	<option value="Czech_Republic">Czech_Republic</option>
	<option value="Democratic_Republic_of_Congo">Democratic_Republic_of_Congo</option>
	<option value="Denmark">Denmark</option>
	<option value="Djibouti">Djibouti</option>
	<option value="Dominica">Dominica</option>
	<option value="Dominican_Republic">Dominican_Republic</option>
	<option value="Ecuador">Ecuador</option>
	<option value="Egypt">Egypt</option>
	<option value="El_Salvador">El_Salvador</option>
	<option value="Equatorial_Guinea">Equatorial_Guinea</option>
	<option value="Eritrea">Eritrea</option>
	<option value="Estonia">Estonia</option>
	<option value="Ethiopia">Ethiopia</option>
	<option value="Faeroe_Islands">Faeroe_Islands</option>
	<option value="Falkland_Islands">Falkland_Islands</option>
	<option value="Fiji">Fiji</option>
	<option value="Finland">Finland</option>
	<option value="France">France</option>
	<option value="French_Polynesia">French_Polynesia</option>
	<option value="Gabon">Gabon</option>
	<option value="Gambia">Gambia</option>
	<option value="Georgia">Georgia</option>
	<option value="Germany">Germany</option>
	<option value="Ghana">Ghana</option>
	<option value="Gibraltar">Gibraltar</option>
	<option value="Greece">Greece</option>
	<option value="Greenland">Greenland</option>
	<option value="Grenada">Grenada</option>
	<option value="Guam">Guam</option>
	<option value="Guatemala">Guatemala</option>
	<option value="Guernsey">Guernsey</option>
	<option value="Guinea">Guinea</option>
	<option value="Guinea-Bissau">Guinea-Bissau</option>
	<option value="Guyana">Guyana</option>
	<option value="Haiti">Haiti</option>
	<option value="Honduras">Honduras</option>
	<option value="Hungary">Hungary</option>
	<option value="Iceland">Iceland</option>
	<option value="India">India</option>
	<option value="Indonesia">Indonesia</option>
	<option value="International">International</option>
	<option value="Iran">Iran</option>
	<option value="Iraq">Iraq</option>
	<option value="Ireland">Ireland</option>
	<option value="Isle_of_Man">Isle_of_Man</option>
	<option value="Israel">Israel</option>
	<option value="Italy">Italy</option>
	<option value="Jamaica">Jamaica</option>
	<option value="Japan">Japan</option>
	<option value="Jersey">Jersey</option>
	<option value="Jordan">Jordan</option>
	<option value="Kazakhstan">Kazakhstan</option>
	<option value="Kenya">Kenya</option>
	<option value="Kosovo">Kosovo</option>
	<option value="Kuwait">Kuwait</option>
	<option value="Kyrgyzstan">Kyrgyzstan</option>
	<option value="Laos">Laos</option>
	<option value="Latvia">Latvia</option>
	<option value="Lebanon">Lebanon</option>
	<option value="Liberia">Liberia</option>
	<option value="Libya">Libya</option>
	<option value="Liechtenstein">Liechtenstein</option>
	<option value="Lithuania">Lithuania</option>
	<option value="Luxembourg">Luxembourg</option>
	<option value="Macedonia">Macedonia</option>
	<option value="Madagascar">Madagascar</option>
	<option value="Malawi">Malawi</option>
	<option value="Malaysia">Malaysia</option>
	<option value="Maldives">Maldives</option>
	<option value="Mali">Mali</option>
	<option value="Malta">Malta</option>
	<option value="Mauritania">Mauritania</option>
	<option value="Mauritius">Mauritius</option>
	<option value="Mexico">Mexico</option>
	<option value="Moldova">Moldova</option>
	<option value="Monaco">Monaco</option>
	<option value="Mongolia">Mongolia</option>
	<option value="Montenegro">Montenegro</option>
	<option value="Montserrat">Montserrat</option>
	<option value="Morocco">Morocco</option>
	<option value="Mozambique">Mozambique</option>
	<option value="Myanmar">Myanmar</option>
	<option value="Namibia">Namibia</option>
	<option value="Nepal">Nepal</option>
	<option value="Netherlands">Netherlands</option>
	<option value="New_Caledonia">New_Caledonia</option>
	<option value="New_Zealand">New_Zealand</option>
	<option value="Nicaragua">Nicaragua</option>
	<option value="Niger">Niger</option>
	<option value="Nigeria">Nigeria</option>
	<option value="Northern_Mariana_Islands">Northern_Mariana_Islands</option>
	<option value="Norway">Norway</option>
	<option value="Oman">Oman</option>
	<option value="Pakistan">Pakistan</option>
	<option value="Palestine">Palestine</option>
	<option value="Panama">Panama</option>
	<option value="Papua_New_Guinea">Papua_New_Guinea</option>
	<option value="Paraguay">Paraguay</option>
	<option value="Peru">Peru</option>
	<option value="Philippines">Philippines</option>
	<option value="Poland">Poland</option>
	<option value="Portugal">Portugal</option>
	<option value="Puerto_Rico">Puerto_Rico</option>
	<option value="Qatar">Qatar</option>
	<option value="Romania">Romania</option>
	<option value="Russia">Russia</option>
	<option value="Rwanda">Rwanda</option>
	<option value="Saint_Barthlemy">Saint_Barthlemy</option>
	<option value="Saint_Kitts_and_Nevis">Saint_Kitts_and_Nevis</option>
	<option value="Saint_Lucia">Saint_Lucia</option>
	<option value="Saint_Vincent_and_the_Grenadines">Saint_Vincent_and_the_Grenadines</option>
	<option value="San_Marino">San_Marino</option>
	<option value="Saudi_Arabia">Saudi_Arabia</option>
	<option value="Senegal">Senegal</option>
	<option value="Serbia">Serbia</option>
	<option value="Seychelles">Seychelles</option>
	<option value="Sierra_Leone">Sierra_Leone</option>
	<option value="Singapore">Singapore</option>
	<option value="Sint_Maarten_(Dutch_part)">Sint_Maarten_(Dutch_part)</option>
	<option value="Slovakia">Slovakia</option>
	<option value="Slovenia">Slovenia</option>
	<option value="Somalia">Somalia</option>
	<option value="South_Africa">South_Africa</option>
	<option value="South_Korea">South_Korea</option>
	<option value="South_Sudan">South_Sudan</option>
	<option value="Spain">Spain</option>
	<option value="Sri_Lanka">Sri_Lanka</option>
	<option value="Sudan">Sudan</option>
	<option value="Suriname">Suriname</option>
	<option value="Swaziland">Swaziland</option>
	<option value="Sweden">Sweden</option>
	<option value="Switzerland">Switzerland</option>
	<option value="Syria">Syria</option>
	<option value="Taiwan">Taiwan</option>
	<option value="Tanzania">Tanzania</option>
	<option value="Thailand">Thailand</option>
	<option value="Timor">Timor</option>
	<option value="Togo">Togo</option>
	<option value="Trinidad_and_Tobago">Trinidad_and_Tobago</option>
	<option value="Tunisia">Tunisia</option>
	<option value="Turkey">Turkey</option>
	<option value="Turks_and_Caicos_Islands">Turks_and_Caicos_Islands</option>
	<option value="Uganda">Uganda</option>
	<option value="Ukraine">Ukraine</option>
	<option value="United_Arab_Emirates">United_Arab_Emirates</option>
	<option value="United_Kingdom">United_Kingdom</option>
	<option value="United_States">United_States</option>
	<option value="United_States_Virgin_Islands">United_States_Virgin_Islands</option>
	<option value="Uruguay">Uruguay</option>
	<option value="Uzbekistan">Uzbekistan</option>
	<option value="Vatican">Vatican</option>
	<option value="Venezuela">Venezuela</option>
	<option value="Vietnam">Vietnam</option>
	<option value="World">World</option>
	<option value="Zambia">Zambia</option>
	<option value="Zimbabwe">Zimbabwe</option>

</select> 
	<input type="submit" name="submit" value="Select" />
</form>
<?php
    if( isset($_POST['submit']))
    {
	$getcountry = $_POST['country'];
	// echo 'Prepared plot is for ' .$getcountry;
$myfile = fopen("Data/ListC.txt", "r") or die("Unable to open file!");;
$txt = ' ';
$var = $getcountry."\n" ;
while(!  feof ($myfile)) {
       $txt =  fgets ($myfile);
 if( strcmp("Afghanistan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Afghanistan" Data/Countries/Afghanistan.data') ;
	 break; 
	}
 if( strcmp("Albania\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Albania" Data/Countries/Albania.data') ;
	 break; 
	}
 if( strcmp("Algeria\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Algeria" Data/Countries/Algeria.data') ;
	 break; 
	}
 if( strcmp("Andorra\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Andorra" Data/Countries/Andorra.data') ;
	 break; 
	}
 if( strcmp("Angola\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Angola" Data/Countries/Angola.data') ;
	 break; 
	}
 if( strcmp("Anguilla\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Anguilla" Data/Countries/Anguilla.data') ;
	 break; 
	}
 if( strcmp("Antigua_and_Barbuda\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Antigua_and_Barbuda" Data/Countries/Antigua_and_Barbuda.data') ;
	 break; 
	}
 if( strcmp("Argentina\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Argentina" Data/Countries/Argentina.data') ;
	 break; 
	}
 if( strcmp("Armenia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Armenia" Data/Countries/Armenia.data') ;
	 break; 
	}
 if( strcmp("Aruba\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Aruba" Data/Countries/Aruba.data') ;
	 break; 
	}
 if( strcmp("Australia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Australia" Data/Countries/Australia.data') ;
	 break; 
	}
 if( strcmp("Austria\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Austria" Data/Countries/Austria.data') ;
	 break; 
	}
 if( strcmp("Azerbaijan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Azerbaijan" Data/Countries/Azerbaijan.data') ;
	 break; 
	}
 if( strcmp("Bahamas\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bahamas" Data/Countries/Bahamas.data') ;
	 break; 
	}
 if( strcmp("Bahrain\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bahrain" Data/Countries/Bahrain.data') ;
	 break; 
	}
 if( strcmp("Bangladesh\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bangladesh" Data/Countries/Bangladesh.data') ;
	 break; 
	}
 if( strcmp("Barbados\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Barbados" Data/Countries/Barbados.data') ;
	 break; 
	}
 if( strcmp("Belarus\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Belarus" Data/Countries/Belarus.data') ;
	 break; 
	}
 if( strcmp("Belgium\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Belgium" Data/Countries/Belgium.data') ;
	 break; 
	}
 if( strcmp("Belize\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Belize" Data/Countries/Belize.data') ;
	 break; 
	}
 if( strcmp("Benin\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Benin" Data/Countries/Benin.data') ;
	 break; 
	}
 if( strcmp("Bermuda\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bermuda" Data/Countries/Bermuda.data') ;
	 break; 
	}
 if( strcmp("Bhutan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bhutan" Data/Countries/Bhutan.data') ;
	 break; 
	}
 if( strcmp("Bolivia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bolivia" Data/Countries/Bolivia.data') ;
	 break; 
	}
 if( strcmp("Bonaire_Sint_Eustatius_and_Saba\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bonaire_Sint_Eustatius_and_Saba" Data/Countries/Bonaire_Sint_Eustatius_and_Saba.data') ;
	 break; 
	}
 if( strcmp("Bosnia_and_Herzegovina\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bosnia_and_Herzegovina" Data/Countries/Bosnia_and_Herzegovina.data') ;
	 break; 
	}
 if( strcmp("Botswana\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Botswana" Data/Countries/Botswana.data') ;
	 break; 
	}
 if( strcmp("Brazil\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Brazil" Data/Countries/Brazil.data') ;
	 break; 
	}
 if( strcmp("British_Virgin_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="British_Virgin_Islands" Data/Countries/British_Virgin_Islands.data') ;
	 break; 
	}
 if( strcmp("Brunei\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Brunei" Data/Countries/Brunei.data') ;
	 break; 
	}
 if( strcmp("Bulgaria\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Bulgaria" Data/Countries/Bulgaria.data') ;
	 break; 
	}
 if( strcmp("Burkina_Faso\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Burkina_Faso" Data/Countries/Burkina_Faso.data') ;
	 break; 
	}
 if( strcmp("Burundi\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Burundi" Data/Countries/Burundi.data') ;
	 break; 
	}
 if( strcmp("Cambodia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cambodia" Data/Countries/Cambodia.data') ;
	 break; 
	}
 if( strcmp("Cameroon\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cameroon" Data/Countries/Cameroon.data') ;
	 break; 
	}
 if( strcmp("Canada\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Canada" Data/Countries/Canada.data') ;
	 break; 
	}
 if( strcmp("Cape_Verde\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cape_Verde" Data/Countries/Cape_Verde.data') ;
	 break; 
	}
 if( strcmp("Cayman_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cayman_Islands" Data/Countries/Cayman_Islands.data') ;
	 break; 
	}
 if( strcmp("Central_African_Republic\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Central_African_Republic" Data/Countries/Central_African_Republic.data') ;
	 break; 
	}
 if( strcmp("Chad\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Chad" Data/Countries/Chad.data') ;
	 break; 
	}
 if( strcmp("Chile\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Chile" Data/Countries/Chile.data') ;
	 break; 
	}
 if( strcmp("China\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="China" Data/Countries/China.data') ;
	 break; 
	}
 if( strcmp("Colombia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Colombia" Data/Countries/Colombia.data') ;
	 break; 
	}
 if( strcmp("Congo\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Congo" Data/Countries/Congo.data') ;
	 break; 
	}
 if( strcmp("Costa_Rica\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Costa_Rica" Data/Countries/Costa_Rica.data') ;
	 break; 
	}
 if( strcmp("Cote_dIvoire\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cote_dIvoire" Data/Countries/Cote_dIvoire.data') ;
	 break; 
	}
 if( strcmp("Croatia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Croatia" Data/Countries/Croatia.data') ;
	 break; 
	}
 if( strcmp("Cuba\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cuba" Data/Countries/Cuba.data') ;
	 break; 
	}
 if( strcmp("Curacao\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Curacao" Data/Countries/Curacao.data') ;
	 break; 
	}
 if( strcmp("Cyprus\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Cyprus" Data/Countries/Cyprus.data') ;
	 break; 
	}
 if( strcmp("Czech_Republic\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Czech_Republic" Data/Countries/Czech_Republic.data') ;
	 break; 
	}
 if( strcmp("Democratic_Republic_of_Congo\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Democratic_Republic_of_Congo" Data/Countries/Democratic_Republic_of_Congo.data') ;
	 break; 
	}
 if( strcmp("Denmark\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Denmark" Data/Countries/Denmark.data') ;
	 break; 
	}
 if( strcmp("Djibouti\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Djibouti" Data/Countries/Djibouti.data') ;
	 break; 
	}
 if( strcmp("Dominica\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Dominica" Data/Countries/Dominica.data') ;
	 break; 
	}
 if( strcmp("Dominican_Republic\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Dominican_Republic" Data/Countries/Dominican_Republic.data') ;
	 break; 
	}
 if( strcmp("Ecuador\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Ecuador" Data/Countries/Ecuador.data') ;
	 break; 
	}
 if( strcmp("Egypt\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Egypt" Data/Countries/Egypt.data') ;
	 break; 
	}
 if( strcmp("El_Salvador\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="El_Salvador" Data/Countries/El_Salvador.data') ;
	 break; 
	}
 if( strcmp("Equatorial_Guinea\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Equatorial_Guinea" Data/Countries/Equatorial_Guinea.data') ;
	 break; 
	}
 if( strcmp("Eritrea\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Eritrea" Data/Countries/Eritrea.data') ;
	 break; 
	}
 if( strcmp("Estonia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Estonia" Data/Countries/Estonia.data') ;
	 break; 
	}
 if( strcmp("Ethiopia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Ethiopia" Data/Countries/Ethiopia.data') ;
	 break; 
	}
 if( strcmp("Faeroe_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Faeroe_Islands" Data/Countries/Faeroe_Islands.data') ;
	 break; 
	}
 if( strcmp("Falkland_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Falkland_Islands" Data/Countries/Falkland_Islands.data') ;
	 break; 
	}
 if( strcmp("Fiji\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Fiji" Data/Countries/Fiji.data') ;
	 break; 
	}
 if( strcmp("Finland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Finland" Data/Countries/Finland.data') ;
	 break; 
	}
 if( strcmp("France\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="France" Data/Countries/France.data') ;
	 break; 
	}
 if( strcmp("French_Polynesia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="French_Polynesia" Data/Countries/French_Polynesia.data') ;
	 break; 
	}
 if( strcmp("Gabon\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Gabon" Data/Countries/Gabon.data') ;
	 break; 
	}
 if( strcmp("Gambia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Gambia" Data/Countries/Gambia.data') ;
	 break; 
	}
 if( strcmp("Georgia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Georgia" Data/Countries/Georgia.data') ;
	 break; 
	}
 if( strcmp("Germany\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Germany" Data/Countries/Germany.data') ;
	 break; 
	}
 if( strcmp("Ghana\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Ghana" Data/Countries/Ghana.data') ;
	 break; 
	}
 if( strcmp("Gibraltar\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Gibraltar" Data/Countries/Gibraltar.data') ;
	 break; 
	}
 if( strcmp("Greece\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Greece" Data/Countries/Greece.data') ;
	 break; 
	}
 if( strcmp("Greenland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Greenland" Data/Countries/Greenland.data') ;
	 break; 
	}
 if( strcmp("Grenada\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Grenada" Data/Countries/Grenada.data') ;
	 break; 
	}
 if( strcmp("Guam\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Guam" Data/Countries/Guam.data') ;
	 break; 
	}
 if( strcmp("Guatemala\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Guatemala" Data/Countries/Guatemala.data') ;
	 break; 
	}
 if( strcmp("Guernsey\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Guernsey" Data/Countries/Guernsey.data') ;
	 break; 
	}
 if( strcmp("Guinea\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Guinea" Data/Countries/Guinea.data') ;
	 break; 
	}
 if( strcmp("Guinea-Bissau\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Guinea-Bissau" Data/Countries/Guinea-Bissau.data') ;
	 break; 
	}
 if( strcmp("Guyana\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Guyana" Data/Countries/Guyana.data') ;
	 break; 
	}
 if( strcmp("Haiti\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Haiti" Data/Countries/Haiti.data') ;
	 break; 
	}
 if( strcmp("Honduras\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Honduras" Data/Countries/Honduras.data') ;
	 break; 
	}
 if( strcmp("Hungary\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Hungary" Data/Countries/Hungary.data') ;
	 break; 
	}
 if( strcmp("Iceland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Iceland" Data/Countries/Iceland.data') ;
	 break; 
	}
 if( strcmp("India\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="India" Data/Countries/India.data') ;
	 break; 
	}
 if( strcmp("Indonesia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Indonesia" Data/Countries/Indonesia.data') ;
	 break; 
	}
 if( strcmp("International\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="International" Data/Countries/International.data') ;
	 break; 
	}
 if( strcmp("Iran\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Iran" Data/Countries/Iran.data') ;
	 break; 
	}
 if( strcmp("Iraq\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Iraq" Data/Countries/Iraq.data') ;
	 break; 
	}
 if( strcmp("Ireland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Ireland" Data/Countries/Ireland.data') ;
	 break; 
	}
 if( strcmp("Isle_of_Man\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Isle_of_Man" Data/Countries/Isle_of_Man.data') ;
	 break; 
	}
 if( strcmp("Israel\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Israel" Data/Countries/Israel.data') ;
	 break; 
	}
 if( strcmp("Italy\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Italy" Data/Countries/Italy.data') ;
	 break; 
	}
 if( strcmp("Jamaica\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Jamaica" Data/Countries/Jamaica.data') ;
	 break; 
	}
 if( strcmp("Japan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Japan" Data/Countries/Japan.data') ;
	 break; 
	}
 if( strcmp("Jersey\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Jersey" Data/Countries/Jersey.data') ;
	 break; 
	}
 if( strcmp("Jordan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Jordan" Data/Countries/Jordan.data') ;
	 break; 
	}
 if( strcmp("Kazakhstan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Kazakhstan" Data/Countries/Kazakhstan.data') ;
	 break; 
	}
 if( strcmp("Kenya\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Kenya" Data/Countries/Kenya.data') ;
	 break; 
	}
 if( strcmp("Kosovo\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Kosovo" Data/Countries/Kosovo.data') ;
	 break; 
	}
 if( strcmp("Kuwait\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Kuwait" Data/Countries/Kuwait.data') ;
	 break; 
	}
 if( strcmp("Kyrgyzstan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Kyrgyzstan" Data/Countries/Kyrgyzstan.data') ;
	 break; 
	}
 if( strcmp("Laos\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Laos" Data/Countries/Laos.data') ;
	 break; 
	}
 if( strcmp("Latvia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Latvia" Data/Countries/Latvia.data') ;
	 break; 
	}
 if( strcmp("Lebanon\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Lebanon" Data/Countries/Lebanon.data') ;
	 break; 
	}
 if( strcmp("Liberia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Liberia" Data/Countries/Liberia.data') ;
	 break; 
	}
 if( strcmp("Libya\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Libya" Data/Countries/Libya.data') ;
	 break; 
	}
 if( strcmp("Liechtenstein\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Liechtenstein" Data/Countries/Liechtenstein.data') ;
	 break; 
	}
 if( strcmp("Lithuania\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Lithuania" Data/Countries/Lithuania.data') ;
	 break; 
	}
 if( strcmp("Luxembourg\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Luxembourg" Data/Countries/Luxembourg.data') ;
	 break; 
	}
 if( strcmp("Macedonia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Macedonia" Data/Countries/Macedonia.data') ;
	 break; 
	}
 if( strcmp("Madagascar\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Madagascar" Data/Countries/Madagascar.data') ;
	 break; 
	}
 if( strcmp("Malawi\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Malawi" Data/Countries/Malawi.data') ;
	 break; 
	}
 if( strcmp("Malaysia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Malaysia" Data/Countries/Malaysia.data') ;
	 break; 
	}
 if( strcmp("Maldives\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Maldives" Data/Countries/Maldives.data') ;
	 break; 
	}
 if( strcmp("Mali\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Mali" Data/Countries/Mali.data') ;
	 break; 
	}
 if( strcmp("Malta\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Malta" Data/Countries/Malta.data') ;
	 break; 
	}
 if( strcmp("Mauritania\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Mauritania" Data/Countries/Mauritania.data') ;
	 break; 
	}
 if( strcmp("Mauritius\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Mauritius" Data/Countries/Mauritius.data') ;
	 break; 
	}
 if( strcmp("Mexico\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Mexico" Data/Countries/Mexico.data') ;
	 break; 
	}
 if( strcmp("Moldova\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Moldova" Data/Countries/Moldova.data') ;
	 break; 
	}
 if( strcmp("Monaco\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Monaco" Data/Countries/Monaco.data') ;
	 break; 
	}
 if( strcmp("Mongolia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Mongolia" Data/Countries/Mongolia.data') ;
	 break; 
	}
 if( strcmp("Montenegro\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Montenegro" Data/Countries/Montenegro.data') ;
	 break; 
	}
 if( strcmp("Montserrat\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Montserrat" Data/Countries/Montserrat.data') ;
	 break; 
	}
 if( strcmp("Morocco\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Morocco" Data/Countries/Morocco.data') ;
	 break; 
	}
 if( strcmp("Mozambique\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Mozambique" Data/Countries/Mozambique.data') ;
	 break; 
	}
 if( strcmp("Myanmar\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Myanmar" Data/Countries/Myanmar.data') ;
	 break; 
	}
 if( strcmp("Namibia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Namibia" Data/Countries/Namibia.data') ;
	 break; 
	}
 if( strcmp("Nepal\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Nepal" Data/Countries/Nepal.data') ;
	 break; 
	}
 if( strcmp("Netherlands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Netherlands" Data/Countries/Netherlands.data') ;
	 break; 
	}
 if( strcmp("New_Caledonia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="New_Caledonia" Data/Countries/New_Caledonia.data') ;
	 break; 
	}
 if( strcmp("New_Zealand\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="New_Zealand" Data/Countries/New_Zealand.data') ;
	 break; 
	}
 if( strcmp("Nicaragua\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Nicaragua" Data/Countries/Nicaragua.data') ;
	 break; 
	}
 if( strcmp("Niger\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Niger" Data/Countries/Niger.data') ;
	 break; 
	}
 if( strcmp("Nigeria\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Nigeria" Data/Countries/Nigeria.data') ;
	 break; 
	}
 if( strcmp("Northern_Mariana_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Northern_Mariana_Islands" Data/Countries/Northern_Mariana_Islands.data') ;
	 break; 
	}
 if( strcmp("Norway\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Norway" Data/Countries/Norway.data') ;
	 break; 
	}
 if( strcmp("Oman\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Oman" Data/Countries/Oman.data') ;
	 break; 
	}
 if( strcmp("Pakistan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Pakistan" Data/Countries/Pakistan.data') ;
	 break; 
	}
 if( strcmp("Palestine\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Palestine" Data/Countries/Palestine.data') ;
	 break; 
	}
 if( strcmp("Panama\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Panama" Data/Countries/Panama.data') ;
	 break; 
	}
 if( strcmp("Papua_New_Guinea\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Papua_New_Guinea" Data/Countries/Papua_New_Guinea.data') ;
	 break; 
	}
 if( strcmp("Paraguay\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Paraguay" Data/Countries/Paraguay.data') ;
	 break; 
	}
 if( strcmp("Peru\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Peru" Data/Countries/Peru.data') ;
	 break; 
	}
 if( strcmp("Philippines\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Philippines" Data/Countries/Philippines.data') ;
	 break; 
	}
 if( strcmp("Poland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Poland" Data/Countries/Poland.data') ;
	 break; 
	}
 if( strcmp("Portugal\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Portugal" Data/Countries/Portugal.data') ;
	 break; 
	}
 if( strcmp("Puerto_Rico\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Puerto_Rico" Data/Countries/Puerto_Rico.data') ;
	 break; 
	}
 if( strcmp("Qatar\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Qatar" Data/Countries/Qatar.data') ;
	 break; 
	}
 if( strcmp("Romania\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Romania" Data/Countries/Romania.data') ;
	 break; 
	}
 if( strcmp("Russia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Russia" Data/Countries/Russia.data') ;
	 break; 
	}
 if( strcmp("Rwanda\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Rwanda" Data/Countries/Rwanda.data') ;
	 break; 
	}
 if( strcmp("Saint_Barthlemy\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Saint_Barthlemy" Data/Countries/Saint_Barthlemy.data') ;
	 break; 
	}
 if( strcmp("Saint_Kitts_and_Nevis\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Saint_Kitts_and_Nevis" Data/Countries/Saint_Kitts_and_Nevis.data') ;
	 break; 
	}
 if( strcmp("Saint_Lucia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Saint_Lucia" Data/Countries/Saint_Lucia.data') ;
	 break; 
	}
 if( strcmp("Saint_Vincent_and_the_Grenadines\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Saint_Vincent_and_the_Grenadines" Data/Countries/Saint_Vincent_and_the_Grenadines.data') ;
	 break; 
	}
 if( strcmp("San_Marino\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="San_Marino" Data/Countries/San_Marino.data') ;
	 break; 
	}
 if( strcmp("Saudi_Arabia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Saudi_Arabia" Data/Countries/Saudi_Arabia.data') ;
	 break; 
	}
 if( strcmp("Senegal\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Senegal" Data/Countries/Senegal.data') ;
	 break; 
	}
 if( strcmp("Serbia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Serbia" Data/Countries/Serbia.data') ;
	 break; 
	}
 if( strcmp("Seychelles\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Seychelles" Data/Countries/Seychelles.data') ;
	 break; 
	}
 if( strcmp("Sierra_Leone\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Sierra_Leone" Data/Countries/Sierra_Leone.data') ;
	 break; 
	}
 if( strcmp("Singapore\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Singapore" Data/Countries/Singapore.data') ;
	 break; 
	}
 if( strcmp("Sint_Maarten_(Dutch_part)\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Sint_Maarten_(Dutch_part)" Data/Countries/Sint_Maarten_(Dutch_part).data') ;
	 break; 
	}
 if( strcmp("Slovakia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Slovakia" Data/Countries/Slovakia.data') ;
	 break; 
	}
 if( strcmp("Slovenia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Slovenia" Data/Countries/Slovenia.data') ;
	 break; 
	}
 if( strcmp("Somalia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Somalia" Data/Countries/Somalia.data') ;
	 break; 
	}
 if( strcmp("South_Africa\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="South_Africa" Data/Countries/South_Africa.data') ;
	 break; 
	}
 if( strcmp("South_Korea\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="South_Korea" Data/Countries/South_Korea.data') ;
	 break; 
	}
 if( strcmp("South_Sudan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="South_Sudan" Data/Countries/South_Sudan.data') ;
	 break; 
	}
 if( strcmp("Spain\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Spain" Data/Countries/Spain.data') ;
	 break; 
	}
 if( strcmp("Sri_Lanka\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Sri_Lanka" Data/Countries/Sri_Lanka.data') ;
	 break; 
	}
 if( strcmp("Sudan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Sudan" Data/Countries/Sudan.data') ;
	 break; 
	}
 if( strcmp("Suriname\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Suriname" Data/Countries/Suriname.data') ;
	 break; 
	}
 if( strcmp("Swaziland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Swaziland" Data/Countries/Swaziland.data') ;
	 break; 
	}
 if( strcmp("Sweden\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Sweden" Data/Countries/Sweden.data') ;
	 break; 
	}
 if( strcmp("Switzerland\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Switzerland" Data/Countries/Switzerland.data') ;
	 break; 
	}
 if( strcmp("Syria\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Syria" Data/Countries/Syria.data') ;
	 break; 
	}
 if( strcmp("Taiwan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Taiwan" Data/Countries/Taiwan.data') ;
	 break; 
	}
 if( strcmp("Tanzania\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Tanzania" Data/Countries/Tanzania.data') ;
	 break; 
	}
 if( strcmp("Thailand\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Thailand" Data/Countries/Thailand.data') ;
	 break; 
	}
 if( strcmp("Timor\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Timor" Data/Countries/Timor.data') ;
	 break; 
	}
 if( strcmp("Togo\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Togo" Data/Countries/Togo.data') ;
	 break; 
	}
 if( strcmp("Trinidad_and_Tobago\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Trinidad_and_Tobago" Data/Countries/Trinidad_and_Tobago.data') ;
	 break; 
	}
 if( strcmp("Tunisia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Tunisia" Data/Countries/Tunisia.data') ;
	 break; 
	}
 if( strcmp("Turkey\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Turkey" Data/Countries/Turkey.data') ;
	 break; 
	}
 if( strcmp("Turks_and_Caicos_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Turks_and_Caicos_Islands" Data/Countries/Turks_and_Caicos_Islands.data') ;
	 break; 
	}
 if( strcmp("Uganda\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Uganda" Data/Countries/Uganda.data') ;
	 break; 
	}
 if( strcmp("Ukraine\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Ukraine" Data/Countries/Ukraine.data') ;
	 break; 
	}
 if( strcmp("United_Arab_Emirates\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="United_Arab_Emirates" Data/Countries/United_Arab_Emirates.data') ;
	 break; 
	}
 if( strcmp("United_Kingdom\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="United_Kingdom" Data/Countries/United_Kingdom.data') ;
	 break; 
	}
 if( strcmp("United_States\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="United_States" Data/Countries/United_States.data') ;
	 break; 
	}
 if( strcmp("United_States_Virgin_Islands\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="United_States_Virgin_Islands" Data/Countries/United_States_Virgin_Islands.data') ;
	 break; 
	}
 if( strcmp("Uruguay\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Uruguay" Data/Countries/Uruguay.data') ;
	 break; 
	}
 if( strcmp("Uzbekistan\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Uzbekistan" Data/Countries/Uzbekistan.data') ;
	 break; 
	}
 if( strcmp("Vatican\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Vatican" Data/Countries/Vatican.data') ;
	 break; 
	}
 if( strcmp("Venezuela\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Venezuela" Data/Countries/Venezuela.data') ;
	 break; 
	}
 if( strcmp("Vietnam\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Vietnam" Data/Countries/Vietnam.data') ;
	 break; 
	}
 if( strcmp("World\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="World" Data/Countries/World.data') ;
	 break; 
	}
 if( strcmp("Zambia\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Zambia" Data/Countries/Zambia.data') ;
	 break; 
	}
 if( strcmp("Zimbabwe\n",$var ) == 0){ 
	 system('awk -f ./Data/plt.awk var="Zimbabwe" Data/Countries/Zimbabwe.data') ;
	 break; 
	}
}
fclose($myfile);
    }
?>
    	<h2></h2>
    		<iframe src="Data/plt.html" width="600" height="400"></iframe>
    		<iframe src="Data/wrd.html" width="600" height="400"></iframe>

	</center>
 
</body>
</html>
