# This script reads in a .csv file and generates a .data file for each country.
# The name of the data file is Countryname.data.
# The generated files are stored in the Data/Countries directory.
# Each data file consists of 5 records per line.  These records are the date, #
# of new cases, # of new deaths, # of total cases and # of total_deaths.
#

BEGIN {
	  FS = ","
      }
NR{
	max_nf = 0;
	man_nr = 0;
	if(max_nf < NF )
		max_nf = NF
	max_nr = NR
	for( x=1; x<=NF; x++)
		vector[x,NR] = $x
}

END {
  country = " ";
  CountryList = "Data/ListC.txt" ;
  for (x = 2; x <= max_nr; x++) {
       if( vector[2,x] != country ){
	       print vector[2,x] > CountryList
	       country = vector[2,x];
       	       outf = "Data/Countries/" vector[2,x] ".data" ;
       	       #print vector[2,x] > outf;
       }
       for (y = 1; y < max_nf; y++){
	       if( y != 2 )
	       	printf "%s,",vector[y,x]  > outf
       }
     	printf "%s ",vector[y,x]  > outf
	print " " > outf
      }
  }
