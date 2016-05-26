def convertFracts fs
  fs.map { |f| [f[0] * (cd = fs.map { |f| f[1] }.reduce(:lcm)) / f[1], cd] }
end
