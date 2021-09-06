import sys
import argparse
import numpy as np
from PIL import Image
import requests
from io import BytesIO
import matplotlib.pyplot as plt

from keras.preprocessing import image
from keras.models import load_model
from keras.applications.inception_v3 import preprocess_input


# target_size = (224, 224) #fixed size for MobileNet architecture
# model_path = 'newmodelbalance'
# image1 = 'us209.jpg'
# img = Image.open(image1)
# model_path = load_model(model_path)

def predict(model_path, img, target_size):
  
  if img.size != target_size:
    img = img.resize(target_size)

  x = image.img_to_array(img)
  x = np.expand_dims(x, axis=0)
  x = preprocess_input(x)
  preds = model_path.predict(x)
  res=preds[0]
  ind=np.argmax(res)
  return ind


def plot_preds(image, preds):
  global diseasename
 
  labels = ("benign","malignant")
  
  predsnormal = preds.tolist()
  a = predsnormal.index(max(predsnormal))
  diseasename = labels[a]
  print(diseasename)


if __name__=="__main__":
  if image1 is None:
  
    sys.exit(1)

  
  if image1 is not None:
    
    plot_preds(img, predict(model_path, img, target_size))