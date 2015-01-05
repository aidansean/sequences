from project_module import project_object, image_object, link_object, challenge_object

p = project_object('sequences', 'Sequences')
p.domain = 'http://www.aidansean.com/'
p.path = 'sequences'
p.preview_image_ = image_object('http://placekitten.com.s3.amazonaws.com/homepage-samples/408/287.jpg', 408, 287)
p.github_repo_name = 'sequences'
p.mathjax = True
p.links.append(link_object(p.domain, 'sequences', 'Live page'))
p.introduction = 'This project is intended to be a space to investigate different sequences.'
p.overview = '''This is a work in progress, with much more space for much more development at a later date.  The user can change some settings to generate different sequences.  The only reason the project is so small is lack of time and interest to devote to it.'''
