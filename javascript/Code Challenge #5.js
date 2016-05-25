let accum=s=>s.toLowerCase().split("").map((l,i)=>Array(i+2).join("~").split("").map((m,j)=>j==0?l.toUpperCase():l).join("")).join("-");
