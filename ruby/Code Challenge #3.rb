def get_middle s
  s.length % 2 != 0 ? s.split("")[~~(s.length / 2)] : s.split("")[s.length / 2 - 1] + s.split("")[s.length / 2]
end
