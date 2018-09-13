function findNextSquare(sq) {
  // Return the next square if sq if a perfect square, -1 otherwise
  x = Math.sqrt(sq);
  return Number.isInteger(x) ?  Math.pow(x+=1, 2) : -1;
}
