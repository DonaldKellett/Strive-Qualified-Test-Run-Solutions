def convertFracts lst
  common_denominator = lst.map { |f| f[1] }.reduce(:lcm)
  lst.map { |f| [f[0] * common_denominator / f[1], common_denominator] }
end