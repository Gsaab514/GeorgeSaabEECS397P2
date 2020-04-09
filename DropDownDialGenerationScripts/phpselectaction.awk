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
	PHPFile = "phpaction.txt" ;
  for (x = 1; x <= max_nr; x++) {
       for (y = 1; y <= max_nf; y++){
	print " if( strcmp(\""vector[1,x]"\\n\",$var ) == 0){ \n\t system('awk -f plt.awk var=\"" vector[1,x] "\" Data/Countries/" vector[1,x] ".data') ;\n\t break; \n\t}" > PHPFile
       }
      }
  }
