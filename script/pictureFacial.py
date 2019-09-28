import cv2
import matplotlib.pyplot as plt
import matplotlib.image as mpimg


#Detection de face 

def detect(path):
    img = cv2.imread(path) 
    cascade = cv2.CascadeClassifier("./haarcascade_frontalface_alt.xml")
    rects = cascade.detectMultiScale(img, 1.3, 4,cv2.CASCADE_SCALE_IMAGE, (20,20))
    
    for (x, y, w, h) in rects: 
        print(x,y,w,h)
        roi_gray = img[y:y+h, x:x+w]
        img_item = "img.png"
        cv2.imwrite(img_item, roi_gray)

    if len(rects) == 0:
        return [], img
    rects[:, 2:] += rects[:, :2]
    return rects, img
def box(rects, img):

    for x1, y1, x2, y2 in rects:
        cv2.rectangle(img, (x1, y1), (x2, y2), (127, 255, 0), 2)
    cv2.imwrite('facial.jpg', img);
    img1 = mpimg.imread('facial.jpg')
    plt.show(img1)
rects, img = detect("./face/dinasitraka.jpg")
box(rects, img)