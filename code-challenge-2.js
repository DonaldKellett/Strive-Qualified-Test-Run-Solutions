function convertFrac(lst) {
  var denom = lst.map(frac => frac[1]);
  var i = 1, commonDenomFound = !1;
  while (!commonDenomFound) {
    if (denom.filter(n=>i%n==0).length === denom.length) {
      var commonDenom = i;
      commonDenomFound = !0;
    }
    i++;
  }
  return lst.map(frac => `(${frac[0] * commonDenom / frac[1]},${commonDenom})`).join("");
}