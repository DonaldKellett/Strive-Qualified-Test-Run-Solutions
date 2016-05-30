gcd = (a, b) -> if b == 0 then a else gcd(b, a % b)
lcm = (a, b) -> a * b / gcd(a, b)
convertFrac = (fs) -> fs.map((f) -> "(" + f[0] * (cd = fs.map((f) -> f[1]).reduce(lcm, 1)) / f[1] + "," + cd + ")").join("")
