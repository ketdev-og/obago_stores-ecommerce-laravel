
    let options = {
    
      // auto starts on page load
      autostart: true,
    
      property: 'value',
      // callback
      onComplete: null,
      
      // controls the speed at which the marquee moves
      duration: 20000, 
    
      // right margin between consecutive marquees
      padding: 10, 
    
      // class of the actual div or span that will be used to create the marquee - 
      // multiple marquee items may be created using this item's content. 
      // This item will be removed from the dom
      marquee_class:'.marquee', 
    
      // the container div in which the marquee content will animate. 
      container_class: '.m_container', 
    
      // a sibling item to the marqueed item  that affects - 
      // the end point position and available space inside the container. 
      sibling_class: '.marquee-sibling', 
    
      // Boolean to indicate whether pause on hover should is required. 
      hover: true,
    
      // 0-1
      velocity: 0.1,
      
      // or right
      direction: 'right'
    }

    $(function (){

        $('.m_container').SimpleMarquee(options);
      
      });
