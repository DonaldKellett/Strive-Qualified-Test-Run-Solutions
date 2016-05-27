getMiddle = (s) -> if s.length % 2 then s[~~(s.length / 2)] else s[s.length / 2 - 1] + s[s.length / 2]
