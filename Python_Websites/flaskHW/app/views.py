from __future__ import print_function
from flask import render_template
from app import app
import os

@app.route('/')
@app.route('/index')
@app.route('/media.imgs')
def index():
	filenames = []
	filepaths = []
	for file in os.listdir('./app/static/imgs'):
		filename = os.fsdecode(file)
		if filename.endswith(".jpg") or filename.endswith(".png"):
			filenames.append(filename)
			filepaths.append('static/imgs/'+filename)
		else:
			continue
	return render_template('index.html',
							title='Home',
							filenames=filenames,
							filepaths=filepaths,
							)

@app.route('/download')
def download():
	return "This is the download section"