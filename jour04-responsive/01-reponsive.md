# responsive

1. que du html (SANS CSS) => vous réaliser du responsive 

2. si vous utilisez les règles `width` et / ou `height` => qui vont rendre la page NON responsive

3. espacer des balises en hauteur =>
    1. margin
    1. padding 
    1. ne pas utiliser de <br> / la hauteur de l'élement

4. pour faire du responsive une solution `@media()`

```css
@media(min-width:600px){
    
    p{
        color : red ; 
    }    

}
// @media => média query 
// tous les p de la page seront de couleur rouge si et uniquement si l'écran à une largeur minimum de 600px jusqu'à l'infini
```

5. il est possible d'avoir PLUSIEURS média query dans une même page css 
```css
@media(min-width:600px){
    
    p{
        color : red ; 
    }    

}
@media(min-width:900px){
    
    p{
        color : blue ; 
    }    

}
0 - 600 => noire (valeur par défaut )
600 - 900 => rouge
900 - infini => blue
```

6. attention à l'ordre 

```css
@media(min-width:900px){
    
    p{
        color : red ; 
    }    
}
@media(min-width:600px){
    
    p{
        color : blue ; 
    }    

}  
// 0 - 600 noire
// 600 infini => blue 



h1{
    font-size : 20px
}


h1{
    font-size : 50px; 
}
```