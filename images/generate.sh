#!/bin/zsh

mkdir fulls thumbs

for i in {01..20}; do
	ffmpeg -y -loglevel quiet -i originals/"$i".jpg -vf "scale=1920:-1" fulls/"$i".jpg
	ffmpeg -y -loglevel quiet -i fulls/"$i".jpg -vf "scale=1920:-1" thumbs/"$i".jpg
	echo -n .
done
echo

du -hd1 .
