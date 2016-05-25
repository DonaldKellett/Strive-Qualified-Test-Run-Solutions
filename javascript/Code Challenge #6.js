const convertFrac = fs => {
  let ds = fs.map(f=>f[1]), i = 1, cd, found = !1;
  while (!found) {
    if (!ds.filter(e=>i%e).length) {
      found = true;
      cd = i;
    }
    i++;
  }
  return fs.map(f=>`(${f[0]*cd/f[1]},${cd})`).join("");
}
