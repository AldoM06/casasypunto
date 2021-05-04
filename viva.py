#librerias
from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import  expected_conditions
from selenium.webdriver.chrome.options import Options

from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.action_chains import ActionChains

import pyautogui
import os.path
import time
import pandas as pd
import mysql.connector
import MySQLdb

user = "aldo.casasypunto@gmail.com"
password = "casasypunto"
title = "Prueba de Aldo 2021 viva anuncios"

def variables():
    print("Ingresa la consulta con bases de datos ")
    conexion=mysql.connector.connect(host="localhost", user="root", passwd="",  database="casaypunto")
    cursor = conexion.cursor()
    sql = "select Id, email, nombre, celular, telefono from users2"
    cursor.execute(sql)
    resultados = cursor.fetchall()
    for datos in resultados:
        print(datos)
    '''
    sql = "select * from users2 WHERE id = '1'"
    cursor.execute(sql)
    resultados = cursor.fetchall()
    print(resultados)
    conexion.close()
    '''

def startexplorer():
    options = webdriver.ChromeOptions()
    options.add_argument('--start-maximized')
    options.add_argument('--disable-extensions')
    options.add_experimental_option('excludeSwitches', ['enable-logging'])
    driver = webdriver.Chrome(executable_path=r'C:/WebDriver/bin/chromedriver.exe', options=options)
    driver.get('https://www.vivanuncios.com.mx/')

    #login(driver)
    try:
        login(driver)
        print("login con exito")
        variables()
        publicar(driver)
        time.sleep(20)
    except Exception as e:
        print("Volver a intentar")
        time.sleep(10)

def publicar(driver):

    boton_publicar = input_title = driver.find_element(By.XPATH,'/html/body/div[1]/div[1]/div[3]/div/a[1]/span')
    boton_publicar.click()
    input_title = driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[4]/div[2]/div[1]/textarea')
    input_title.send_keys(title)
    input_option =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[5]/div[2]/div[1]/select/option[2]')
    input_option.click()
    input_option1 =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[5]/div[2]/div[2]/select/option[1]')
    input_option1.click()
    input_option2 =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[5]/div[2]/div[3]/select/option[1]')
    input_option2.click()
    input_conjunto =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[1]/div[2]/select/option[5]')
    input_conjunto.click()
    input_recam =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_recam.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()
    #wc
    input_wc =  driver.find_element(By.XPATH,'//*[@id="wrapper"]/div[3]/div[6]/div[2]/div[2]/select/option[3]')
    input_wc.click()


    print("hasta aqui todo bien")

def login(driver):
    print("inicia el login")
    login = driver.find_element(By.XPATH,'/html/body/div[1]/div[1]/div[3]/div/div[1]/span[2]')
    login.click()
    input_email = WebDriverWait(driver,30).until(EC.presence_of_element_located((By.XPATH, '/html/body/div[1]/section/div[2]/div/div/div[2]/div[4]/form/div[1]/input')))
    input_email.send_keys(user)
    input_pass = WebDriverWait(driver,30).until(EC.presence_of_element_located((By.XPATH, '/html/body/div[1]/section/div[2]/div/div/div[2]/div[4]/form/div[2]/input')))
    input_pass.send_keys(password)
    time.sleep(5)
    boton = WebDriverWait(driver,30).until(EC.presence_of_element_located((By.XPATH, '/html/body/div[1]/section/div[2]/div/div/div[2]/div[4]/form/div[4]/div[2]/button')))
    boton.click()
    time.sleep(3)
    return True



def main():
    print("funcion principal")
    startexplorer()

if __name__ == '__main__':
    main()
