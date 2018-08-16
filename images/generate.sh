#!/bin/zsh

mkdir fulls thumbs

for i in {01..50}; do
	if [[ -f "originals/$i.jpg" ]]; then
		ffmpeg -y -loglevel quiet -i originals/"$i".jpg -vf "scale=640:-1" thumbs/"$i".jpg
		if [[ `ls -s thumbs/$i.jpg |cut -d ' ' -f 1` -ge `ls -s originals/$i.jpg |cut -d ' ' -f 1` ]]; then
			cp originals/"$i".jpg fulls/"$i".jpg
			cp originals/"$i".jpg thumbs/"$i".jpg
			echo -n #
		else
			ffmpeg -y -loglevel quiet -i originals/"$i".jpg -vf "scale=1920:-1" fulls/"$i".jpg
			if [[ `ls -s fulls/$i.jpg |cut -d ' ' -f 1` -ge `ls -s originals/$i.jpg |cut -d ' ' -f 1` ]]; then
				cp originals/"$i".jpg fulls/"$i".jpg
				echo -n @
			else
				echo -n !
			fi
		fi
	else
		echo -n ' '
	fi
done
echo

du -hd1 .
