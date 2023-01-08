# Muix

> 项目介绍：
> 
> 1. This is a lightweight web framework for front-back distributed based on php >=8.1.*

> 安装说明：
>
> 1. 使用git安装
>
>    git clone https://github.com/muyomu/muix.git
>
> 2. 使用composer安装
>
>    composer create-project muyomu/muix

> 配置说明：
>
> ```tex
> 1. 配置web服务器根目录为boot目录
> 1. 框架相关及官方库配置fields配置于项目目录下的application下的config_application数组或其他库字段。
> 1. 第三方库配置字段建议配置于application.php配置文件下，如果有额外需要，将配置文件置于system目录下，将文件引入到config_autoload.php文件中以能自动预先加载到全局环境中。
> ```

> 文档地址：
>
> http://www.muyomu.com/doc/muix



> 参与贡献：
>
> ```tex
> 1. fork仓库，提交pull request.
> 1. 制作第三方library.
> 1. 制作security验证框架，并通过boot目录下的index文件中的应用配置。相关插件规范请移步到文档地址。
> ```
