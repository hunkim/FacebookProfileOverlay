from PIL import Image

background = Image.open("https://scontent.xx.fbcdn.net/v/t1.0-1/p100x100/10423907_10152916009354521_2656511412585280950_n.jpg?oh=a3cab492101ec6db35d6462a052ab59b&oe=588F0C46")
overlay = Image.open("stepdown.png")

background = background.resize((overlay.size), Image.ANTIALIAS)

background = background.convert("RGBA")
overlay = overlay.convert("RGBA")

new_img = Image.blend(background, overlay, 0.5)
new_img.save("new.png","PNG")