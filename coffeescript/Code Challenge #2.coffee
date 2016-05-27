stringy = (n) -> if n == 0 then '10' else Array(n + 1).join("~").split("").map((e, i) -> if i % 2 then 0 else 1).join("")
