
		<script type="text/javascript">
			let gal= new Array("im1.jpg","im2.jpg","im3.jpg","im4.jpg","im5.png","im6.jpg","im7.jpg","im8.jpg","im9.jpg","im11.jpg");
			let numero=0;
			
			function galerie(val) {
			
					if (val==1) {
						numero++;
						if (numero>(gal.length-1)) {
							numero=0;
						} 
						
						document.getElementById('im').src=gal[numero];
						
					} else if (val==-1) {
						numero--;
						if (numero<0) {
							numero=(gal.length-1);
						} 
						document.getElementById('im').src=gal[numero];
						
					} 

			}
		 
		</script>