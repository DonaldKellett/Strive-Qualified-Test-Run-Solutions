def stringy n
  (1..n).map { |x| x % 2 == 0 ? 0 : 1 }.join ""
end
