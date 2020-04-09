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
  outf = "dropdown.html" ;
  printf "<label for=\"country\">Choose a Country:</label>\n" > outf
  printf "<select id=\"country\">\n" > outf
  for (x = 1; x <= max_nr; x++) {
	print "\t<option value=\"" vector[1,x] "\">"  vector[1,x] "</option>"   > outf
  }
  print "</select>\n" > outf
}
