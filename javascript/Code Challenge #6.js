const gcd=(a,b)=>b==0?a:gcd(b,a%b),lcm=(a,b)=>a*b/gcd(a,b),convertFrac=a=>a.map(f=>`(${f[0]*(d=a.map(f=>f[1]).reduce(lcm,1))/f[1]},${d})`).join("");
