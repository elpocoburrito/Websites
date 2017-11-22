from __future__ import print_function
from flask import render_template
from app import app
import os


@app.route('/')
@app.route('/index')
def index():
    return render_template('index.html',
                           title='Home',
                           )


@app.route('/images')
def images():
    filenames = []
    filepaths = []
    for file in os.listdir('./app/static/imgs'):
        filename = os.fsdecode(file)
        if filename.endswith(".jpg") or filename.endswith(".png"):
            filenames.append(filename)
            filepaths.append('static/imgs/' + filename)
        else:
            continue
    return render_template('images.html',
                           title='Home',
                           filenames=filenames,
                           filepaths=filepaths,
                           )


@app.route('/videos')
def videos():
    user = "Tommy"
    filenames = []
    filepaths = []
    for file in os.listdir('./app/static/imgs'):
        filename = os.fsdecode(file)
        if filename.endswith(".jpg") or filename.endswith(".png"):
            filenames.append(filename)
            filepaths.append('static/imgs/' + filename)
        else:
            continue
    return render_template('videos.html',
                           user=user,
                           title='Home',
                           filenames=filenames,
                           filepaths=filepaths,
                           )


@app.errorhandler(404)
def page_not_found(e):
    return render_template('error404.html')
