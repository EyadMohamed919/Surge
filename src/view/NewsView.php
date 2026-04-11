<?php 
require_once __DIR__ . "/../model/NewsModel.php";
class NewsView{
    public static function fetchNewsTable()
    {
        $newsModel = new NewsModel();
        $news = $newsModel->getAllNews();

        foreach ($news as $news => $article) {
            if(strlen($article->getDescription()) > 30)
            {
                $description = substr($article->getDescription(), 0, 27) . "...";
            }
            else
            {
                $description = $article->getDescription();
            }

            if(strlen($article->getTitle()) > 30)
            {
                $title = substr($article->getTitle(), 0, 27) . "...";
            }
            else
            {
                $title = $article->getTitle();
            }
            
            echo '
            <tr>
                <td><img src="public/uploads/news/' . $article->getImage() . '" class="article-thumb" alt="news"></td>
                <td><strong>' . $title . '</strong></td>
                <td>' . $article->getDate() . '</td>
                <td style="color: var(--text-gray);">' . $description . '</td>
                <td class="actions">
                    <a href="adminEditNews.php?edit=' . $article->getID() . '"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="src/router/NewsRouter.php?delete=' . $article->getID() . '"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            ';
        }
    }

    public static function fetchFourNews()
    {
        $newsModel = new NewsModel();
        $news = $newsModel->getFourNews();

        foreach ($news as $news => $article) {
            if(strlen($article->getDescription()) > 80)
            {
                $description = substr($article->getDescription(), 0, 77) . "...";
            }
            else
            {
                $description = $article->getDescription();
            }

            if(strlen($article->getTitle()) > 30)
            {
                $title = substr($article->getTitle(), 0, 27) . "...";
            }
            else
            {
                $title = $article->getTitle();
            }

            echo '
            <div class="news-card">
                <div class="news-image" style="background-image: url(public/uploads/news/' . $article->getImage() . ');">

                </div>
                <h4>' . $title . '</h4>
                <p>' . $description . '</p>

                <div class="news-quick">
                    <a href="article.php?id=' . $article->getID() . '"><i class="fa-solid fa-arrow-up-right-from-square"></i> More Details</a>
                    <p>
                        <i class="fa-solid fa-calendar-days"></i>
                        ' . $article->getDate() . '
                    </p>
                </div>
            </div>
            ';
        }
    }

    public static function fetchTwoNewsTable()
    {
        $newsModel = new NewsModel();
        $news = $newsModel->getFourNews();

        foreach ($news as $news => $article) {

            if(strlen($article->getTitle()) > 40)
            {
                $title = substr($article->getTitle(), 0, 37) . "...";
            }
            else
            {
                $title = $article->getTitle();
            }

            echo '
                <tr>
                    <td>' . $title . '</td>
                    <td>' . $article->getDate() . '</td>
                    <td><span class="status-pill">Published</span></td>
                    <td class="actions">
                        <a href="adminEditNews.php?edit=' . $article->getID() . '"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="src/router/NewsRouter.php?delete=' . $article->getID() . '"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            ';
        }
    }
}
?>