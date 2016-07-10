from math import sqrt
def is_square(n):
  return False if n < 0 else sqrt(n) % 1.0 == 0.0
