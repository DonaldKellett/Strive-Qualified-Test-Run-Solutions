def accum s
  s.downcase.split("").map.with_index { |l, i|
    result = l.upcase
    i.times do
      result += l
    end
    result
  }.join "-"
end
