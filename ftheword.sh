# ftheword.sh
for (( i = 0; i < 101; i++ )); do
	#statements
	curl http://localhost:8000/save.php -d"docname=$i.txt&text=$i"	
done

