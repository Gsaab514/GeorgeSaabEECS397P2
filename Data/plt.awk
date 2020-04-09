# The script take the country.data file and generated the plot in file plt.html.
# The plot is from canvasjs. 
# 
# I split the plotfile from canvasjs is split into six part between each part
# I inserted the data to be plotted for the country.  All the part + data are 
# cated into plt.html
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
  
  D1 = "Data/d1.txt"
  D2 = "Data/d2.txt"
  D3 = "Data/d3.txt"
  D4 = "Data/d4.txt"
  for (x = 1; x < max_nr; x++) {
	    print "{ label:" "\"" vector[1,x] "\", y:" vector[2,x] "},"   > D1
	    print "{ label:" "\"" vector[1,x] "\", y:" vector[3,x] "},"   > D2
	    print "{ label:" "\"" vector[1,x] "\", y:" vector[4,x] "},"   > D3
	    print "{ label:" "\"" vector[1,x] "\", y:" vector[5,x] "},"   > D4
      }
    print "{ label:" "\"" vector[1,x] "\"" ", y:" vector[2,x] "}"   > D1
    print "{ label:" "\"" vector[1,x] "\"" ", y:" vector[3,x] "}"   > D2
    print "{ label:" "\"" vector[1,x] "\"" ", y:" vector[4,x] "}"   > D3
    print "{ label:" "\"" vector[1,x] "\"" ", y:" vector[5,x] "}"   > D4
	title = "Data/title.txt"
	print "title:{ text: \"Reported Coronavirus Cases in " var "\" }," > title
	cmd ="cat Pparts/p1.txt Data/title.txt Pparts/p2.txt Data/d1.txt Pparts/p3.txt Data/d2.txt Pparts/p4.txt Data/d3.txt Pparts/p5.txt Data/d4.txt Pparts/p6.txt>Data/plt.html"
	system(cmd)
  }
