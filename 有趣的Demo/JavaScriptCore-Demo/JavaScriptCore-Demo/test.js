var factorial = function(n) {
    
    if (n < 0)
        
        return;
    
    if (n === 0)
        
        return 1;
    
    return n * factorial(n - 1)
    
};