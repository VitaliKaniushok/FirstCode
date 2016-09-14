$(document).ready(function(){
	$('#li-misja').hover(
				function(){
					$('#misja').show();
					$(this).find('span').show();
					
					$(this).find('a').css({'color':'#209317',
										  'background':'#e5e5e5'});
				},
				function(){
					$('#misja').css({'display':'none'});
					$(this).find('span').css({'display':'none'});
					$(this).find('a').css({'color':'#3c3c3a',
										  'background':'#fff'});
				}
	);
	
	$('#li-rada').hover(
				function(){
					$('#rada').show();
					$(this).find('span').show();
					
					$(this).find('a').css({'color':'#209317',
										  'background':'#e5e5e5'});
				},
				function(){
					$('#rada').css({'display':'none'});
					$(this).find('span').css({'display':'none'});
					$(this).find('a').css({'color':'#3c3c3a',
										  'background':'#fff'});
				}
	);
	
	$('#li-zespol').hover(
				function(){
					$('#zespol').show();
					$(this).find('span').show();
					
					$(this).find('a').css({'color':'#209317',
										  'background':'#e5e5e5'});
				},
				function(){
					$('#zespol').css({'display':'none'});
					$(this).find('span').css({'display':'none'});
					$(this).find('a').css({'color':'#3c3c3a',
										  'background':'#fff'});
				}
	);
	
	$('#li-statut').hover(
				function(){
					$('#statut').show();
					$(this).find('span').show();
					
					$(this).find('a').css({'color':'#209317',
										  'background':'#e5e5e5'});
				},
				function(){
					$('#statut').css({'display':'none'});
					$(this).find('span').css({'display':'none'});
					$(this).find('a').css({'color':'#3c3c3a',
										  'background':'#fff'});
				}
	)
	
	$('#li-sprawozdania').hover(
				function(){
					$('#sprawozdania').show();
					$(this).find('span').show();
					
					$(this).find('a').css({'color':'#209317',
										  'background':'#e5e5e5'});
				},
				function(){
					$('#sprawozdania').css({'display':'none'});
					$(this).find('span').css({'display':'none'});
					$(this).find('a').css({'color':'#3c3c3a',
										  'background':'#fff'});
				}
	)
	
})