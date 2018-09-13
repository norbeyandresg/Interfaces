function solve(s, k){
  let i = 0;
  let char = 'a';
  while (i < k) {
    for (let j = 0; j < s.length; j++){
      if (s[j] === char) {
        s = s.slice(0,j)+ '-' +s.slice(j+1);
        i += 1;
        if (i === k || s.length === 0) {i = k; break;}
        }
    }
    char = String.fromCharCode(char.charCodeAt(0) + 1);
  }
  return s.replace(/-/g, '');
}
