accum = (s) -> s.toLowerCase().split("").map((l, i) -> Array(i + 2).join("~").split("").map((m, j) -> if j == 0 then l.toUpperCase() else l).join("")).join("-")
