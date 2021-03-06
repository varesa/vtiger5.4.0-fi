#!/bin/env python

import os
import sys
import re
import time

basedir = "vtiger/"

def walk_dir(dir):
    for file in os.listdir(dir):
	if os.path.isdir(os.path.join(dir, file)):
	    walk_dir(os.path.join(dir, file))
	else:
	    if ".lang.php" in file:
    		add_file(dir, file)

english = []
finnish = []
	
def add_file(dir, file):
    if "en_us" in file:
	english.append((dir,file))
    if "fi_fi" in file:
	finnish.append((dir,file))
    
walk_dir(basedir)

en2 = list(os.path.join(x[0], x[1]) for x in english)
fi2 = list(os.path.join(x[0], x[1]) for x in finnish)

for file in en2:

    print("\n" + "#"*(len(file)+4))
    print("# " + file + " #")
    print("#"*(len(file)+4) + "\n")
    time.sleep(2)
    
    outfile = ""
    if file.replace("en_us", "fi_fi") in fi2:
	for line in open(file):
	    line = line.replace('\"', '\'')
	    r = re.search(".*'(.*)'.*=>.*'(.*)'.*", line)
	    if not r is None:
		translated = 0
		for line2 in open(file.replace("en_us", "fi_fi")):
		    line2 = line2.replace('"', '\'')
		    r2 = re.search(".*'(" + r.group(1) + ")'.*=>.*'(.*)'.*,(.*)", line2)
		    if not r2 is None:
			print("Found translation for \"" + r.group(2) + "\" (" + r.group(1) + "): " + r2.group(2))
			translated = 1
			outfile += re.sub(r"(.*'.*'.*=>.*').*('.*)", r"\g<1>" + r2.group(2) + r"\g<2>", line)[:-1] + r2.group(3) + "\n"
			break
			
		if translated is 0:
		    print("No Finnish translation")
		    print("How to translate \"" + r.group(2) + "\" (" + r.group(1) + ")?")
		    try:
			translation = raw_input()
		    except NameError:
		        translation = str(input())
		        
		    if translation != "":
			print("Translated: " + r.group(1) + ": " + r.group(2) + " => " + translation)
			outfile += re.sub(r"(.*'.*'.*=>.*').*('.*)", r"\1" + translation + r"\2",line)[:-1] + " // Translated " + time.strftime("%d.%m.%Y") + '\n'
		
	    else: # A non-translation line
		outfile += line
		
	out = open(file.replace('en_us', 'fi_fi'), 'w')
	out.write(outfile)
	out.close()	
		        
    else:
	print("File: " + file + " not found in finnish")