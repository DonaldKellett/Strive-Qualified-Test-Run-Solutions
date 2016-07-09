import math
def is_square(n):
  return False if n < 0 else math.sqrt(n) % 1.0 == 0.0
