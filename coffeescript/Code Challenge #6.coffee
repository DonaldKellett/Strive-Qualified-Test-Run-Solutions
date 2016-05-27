convertFrac = (fs) ->
  ds = fs.map((f) -> f[1])
  cd = 1
  i = 1
  found = !1
  while !found
    if !ds.filter((e) -> i % e).length
      found = true
      cd = i
    i++
  fs.map((f) -> "(" + f[0] * cd / f[1] + "," + cd + ")").join("")
