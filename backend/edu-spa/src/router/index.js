import Vue from 'vue'
import Router from 'vue-router'

// ---------------------------学校管理目录下-------------------------

import SchoolManager from '../components/schoolmanager/SchoolManager'
import CourseManager from '../components/coursemanager/CourseManager'
import ClassClassificationManagement from '../components/schoolmanager/ClassClassifcationManagement'
import ClassManagement from '../components/schoolmanager/ClassManagement'
import CollegeManagement from '../components/schoolmanager/CollegeManagement'
import StudentManagement from '../components/schoolmanager/StudentManagement'
import StudentRecordsManagement from '../components/schoolmanager/StudentRecordsManagement'

// ----------------------------课程管理目录下------------------------------------------

import AttendanceManagement from '../components/coursemanager/AttendanceManagement'
import Curriculum from '../components/coursemanager/Curriculum'

// --------------------------------课件管理目录下-----------------------------------------

import CoursewareManagement from '../components/coursewareManagement/CoursewareManagement'
import CoursewareList from '../components/coursewareManagement/CoursewareList'
import CoursewareAccessories from '../components/coursewareManagement/CoursewareAccessories'
import CoursewareClassification from '../components/coursewareManagement/CoursewareClassification'
import CoursewareRelation from '../components/coursewareManagement/CoursewareRelation'
import AttachmentManagement from '../components/coursewareManagement/AttachmentManagement'

// ---------------------------------内容目录下------------------------------------------

import Content from '../components/content/Content'
import StaticPage from '../components/content/StaticPage'
import Article from '../components/content/Article'
import ArticleClassification from '../components/content/ArticleClassification'
import TextComponent from '../components/content/TextComponent'
import MenuComponent from '../components/content/MenuComponent'
import CarouselWidgets from '../components/content/CarouselWidgets'
import JoinInformation from '../components/content/JoinInformation'
import ContactUs from '../components/content/ContactUs'

// --------------------------------时间轴-------------------------------------

import TimeAxis from '../components/timeAxis/TimeAxis'

// ------------------------------用户管理-------------------------------

import UserManagement from '../components/UserManagement/UserManagement'

// --------------------------------其他---------------------------------------

import Other from '../components/other/Other'
import InternationalSourceInformation from '../components/other/internationalization/InternationalSourceInformation'
import InternationalInformation from '../components/other/internationalization/InternationalInformation'
import jsonStorage from '../components/other/jsonStorage'
import FileStore from '../components/other/FileStore'
import Cache from '../components/other/Cache'
import FileManagement from '../components/other/FileManagement'

// ----------------------------未知--------------------------------------

import Home from '../components/home/Home'
import Login from '../components/login/Login.vue'
import Main from '../components/main/Main.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    },
    {
      path: '/main',
      name: 'main',
      component: Main
    },
    {
      path: '/home',
      name: 'home',
      component: Home
    },
    {
      path: '/SchoolManager',
      name: 'school-manager',
      component: SchoolManager,
      redirect: '/CollegeManagement',
      children: [
        {
          path: '/CollegeManagement',
          name: 'CollegeManagement',
          component: CollegeManagement
        },
        {
          path: '/ClassClassificationManagement',
          name: 'ClassClassificationManagement',
          component: ClassClassificationManagement
        },
        {
          path: '/ClassManagement',
          name: 'ClassManagement',
          component: ClassManagement
        },
        {
          path: '/StudentManagement',
          name: 'StudentManagement',
          component: StudentManagement
        },
        {
          path: '/StudentRecordsManagement',
          name: StudentRecordsManagement,
          component: StudentRecordsManagement
        }
      ]
    },
    {
      path: '/CourseManager',
      name: 'course-manager',
      component: CourseManager,
      redirect: '/Curriculum',
      children: [
        {
          path: '/Curriculum',
          name: 'Curriculum',
          component: Curriculum
        },
        {
          path: '/AttendanceManagement',
          name: 'AttendanceManagement',
          component: AttendanceManagement
        }
      ]
    },
    {
      path: '/CoursewareManagement',
      name: 'CoursewareManagement',
      component: CoursewareManagement,
      redirect: '/CoursewareList',
      children: [
        {
          path: '/CoursewareList',
          name: 'CoursewareList',
          component: CoursewareList
        },
        {
          path: '/CoursewareAccessories',
          name: 'CoursewareAccessories',
          component: CoursewareAccessories
        },
        {
          path: '/CoursewareClassification',
          name: 'CoursewareClassification',
          component: CoursewareClassification
        },
        {
          path: '/CoursewareRelation',
          name: 'CoursewareRelation',
          component: CoursewareRelation
        },
        {
          path: '/AttachmentManagement',
          name: 'AttachmentManagement',
          component: AttachmentManagement
        }
      ]
    },
    {
      path: '/Content',
      name: 'Content',
      component: Content,
      redirect: '/StaticPage',
      children: [
        {
          path: '/StaticPage',
          name: 'StaticPage',
          component: StaticPage
        },
        {
          path: '/Article',
          name: 'Article',
          component: Article
        },
        {
          path: '/ArticleClassification',
          name: 'ArticleClassification',
          component: ArticleClassification
        },
        {
          path: '/TextComponent',
          name: 'TextComponent',
          component: TextComponent
        },
        {
          path: '/MenuComponent',
          name: 'MenuComponent',
          component: MenuComponent
        },
        {
          path: '/CarouselWidgets',
          name: 'CarouselWidgets',
          component: CarouselWidgets
        },
        {
          path: '/JoinInformation',
          name: 'JoinInformation',
          component: JoinInformation
        },
        {
          path: '/ContactUs',
          name: 'ContactUs',
          component: ContactUs
        }
      ]
    },
    {
      path: '/TimeAxis',
      name: 'TimeAxis',
      component: TimeAxis
    },
    {
      path: '/UserManagement',
      name: 'UserManagement',
      component: UserManagement
    },
    {
      path: '/Other',
      name: 'Other',
      component: Other,
      children: [
        {
          path: '/InternationalSourceInformation',
          name: 'InternationalSourceInformation',
          component: InternationalSourceInformation
        },
        {
          path: '/InternationalInformation',
          name: 'InternationalInformation',
          component: InternationalInformation
        },
        {
          path: '/jsonStorage',
          name: 'jsonStorage',
          component: jsonStorage
        },
        {
          path: '/FileStore',
          name: 'FileStore',
          component: FileStore
        },
        {
          path: '/Cache',
          name: 'Cache',
          component: Cache
        },
        {
          path: '/FileManagement',
          name: '/FileManagement',
          component: FileManagement
        }
      ]
    },
    {
      path: '/CourseManager'
    }
  ]
})
