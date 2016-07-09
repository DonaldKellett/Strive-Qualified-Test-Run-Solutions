def stringy(n):
  result = ""
  for i in range(1, n + 1):
    result += str(i % 2)
  return result
