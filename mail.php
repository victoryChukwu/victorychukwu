 < ? p h p 
 $ n a m e =  $ _ P O S T ['n a m e '] ; 
 $ v i s i t o r _ e m a i l =  $ _ P O S T [ 'e m a i l '] ; 
$title= $POST=['title']
 $ m e s s a g e =  $ _ P O S T [ 'm e s s a g e '] ; 
 
 $ e m a i l _ f r o m = 'o f f i c i a l v i c t o r y c h u k w u @ g m a i l . c o m ';
 $ e m a i l _ s u b j e c t = " N e w   F o r m   S u b m i s s i o n "
 $ e m a i l _ b o d y =  " U s e r   N a m e :   $ n a m e . \ n " .
 " U s e r   E m a i l :   $ v i s i t o r _ e m a i l . \ n " .
 " U s e r   M e s s a g e =  $ m e s s a g e . \ n " ; 
 $  t o  = " o f f i c i a l v i c t o r y c h u k w u @ g m a i l . c o m " ; 
 $ h e a d e r s =  from:$email_from \r\n";
$headers="R e p l y –T o   V i s i t o r _ e m a i l \ r \ n " ; 
 m a i l ( $ t o ,   $ e m a i l _ s u b j e c t ,   e m a i l _ b o d y ,   $ h e a d e r ) ; 
 h e a d e r ( " l o c a t i o n :  index.h t m l )
